<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\CreateCommentRequest;
use App\Models\Image;

class CommentController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth']);
    }

    public function store(Image $image, CreateCommentRequest $request)
    {
        $image->comments()->create($request->getData());

        return back()->with('message', "Your comment has been sent");
    }
}
