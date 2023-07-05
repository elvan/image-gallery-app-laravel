<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Image;

class ImageController extends Controller
{
    public function index()
    {
        $images = Image::published()->latest()->paginate(15);

        return view('image.index', compact('images'));
    }

    public function show(Image $image)
    {
        return view('image.show', compact('image'));
    }
}
