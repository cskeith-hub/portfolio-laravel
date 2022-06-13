<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Colin Renkema</title>
    <link rel="stylesheet" href=" {{ asset('css/app.css') }} ">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <meta name="description" content="Colin Renkema Portfolio">
    <meta name="keywords" content="PHP, MySql, Laravel">
    <meta name="author" content="Colin Renkema">
    <link rel="shortcut icon" type="png" href="/img/Black.png">
    <link rel="stylesheet" href="https://unpkg.com/flowbite@1.4.7/dist/flowbite.min.css" />
        
    
</head>
<body>
    @include('layout.header')
    @yield('body')
    @include('layout.footer')
    <script src="https://unpkg.com/flowbite@1.4.7/dist/flowbite.js"></script>
</body>
</html>
