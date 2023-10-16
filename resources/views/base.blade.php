<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ config('app.name') }} - @yield('title') </title>
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="{{ asset('asset/app.css') }}">
    
    <!-- Lien CDN pour Font Awesome CSS -->
    


    

</head>
<body>
    @include('navbar')

    @yield('content')
    @include('import')
</body>
</html>
