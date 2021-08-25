<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Blade</title>
    </head>
    <body>
      <!-- getting a file and pasting it at your required location. -->
        @include('header')

        @section('main')
        @show

        @include('footer')
    </body>
</html>