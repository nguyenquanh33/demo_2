<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        @yield("title", "Admin")
    </title>
    @vite(['resources/sass/app.scss', 'resources/sass/admin/globals.scss', 'resources/js/app.js', 'resources/sass/admin/product.scss'])
</head>
<body>
<div class="wrapper">
    @include("layouts.admin.sidebar")

    <div class="main" style="background: #F8F8F8">
        @include("layouts.admin.header")
        @yield("content")
    </div>
</div>
</body>
</html>
