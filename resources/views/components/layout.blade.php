@props([
    'title' => '',
])
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Elvan Hidayat">
    <title>{{ $title }} | ImageGallery</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light border-bottom">
        <div class="container-fluid">
            <a class="navbar-brand" href="/">
                <x-icon src="logo.svg" alt="" width="30" height="24"
                    class="d-inline-block align-text-top color-light" />
                ImageGallery
            </a>
            <div class="d-flex">
                <a href="{{ route('images.create') }}" class="btn btn-success">Upload</a>
                {{-- <a href='#' class="btn btn-outline-secondary me-2">Register</a>
                <a href='#' class="btn btn-danger">Login</a> --}}
            </div>
        </div>
    </nav>
    {{ $slot }}
    <footer class="bg-light text-muted py-3 mt-5 border-top">
        <div class="container-fluid">
            <p class="float-end mb-1">
                <a href="#" class="text-decoration-none">Back to top</a>
            </p>
            <p>ImageGallery provides beautiful, high quality & royalty free photos shared by creators everywhere.</p>
            <p>&copy; 2022 ImageGallery</p>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous">
    </script>

    {{-- <script src="https://cdn.jsdelivr.net/npm/masonry-layout@4.2.2/dist/masonry.pkgd.min.js"
        integrity="sha384-GNFwBvfVxBkLMJpYMOABq3c+d3KnQxudP/mGPkzpZSTYykLBNsZEnG2D9G/X/+7D" crossorigin="anonymous" async>
    </script> --}}

</body>

</html>
