<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Blade</title>
        <link rel="stylesheet" href="css/app.css">
        <link rel="stylesheet" href="css/contact/contact.css">
    </head>
    <body>
      <!-- getting a file and pasting it at your required location. -->
        @include('header')

        @section('main')
        @show

        @section('container')
        @show

        @include('footer')

    <script src='js/app.js'></script>
    </body>
</html>