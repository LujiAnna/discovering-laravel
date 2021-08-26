<!-- View stored in resources/views/home.blade.php -->


    @extends('layout')

    @section('main')

    <!-- expression should remain untouched -->
    <!-- <p>Hello, @ double brackets with no $ sign left of variable.</p> -->

    <form action="" method="post">
        <!-- validate request: https://laravel.com/docs/8.x/blade#csrf-field -->
        @csrf
       <!-- spoofing: Since HTML forms can't make PUT, PATCH, or DELETE requests -->

        <!-- "title" => "first title"
        "body" => "first body" -->


        <!-- <label for="name">Name:</label>
        <input type="text" name='name' id='name'>
        <label for="location">Location:</label>
        <input type="text" name='location' id='location'> -->

        <label for="title">Title:</label>
        <input type="text" name='title' id='title'>
        <label for="body">Post Yellow:</label>
        <input type="text" name='body' id='body'>


        <input type="submit" name='submit' id='submit' value='yellow'>

        
    

    </form>

    @endsection



