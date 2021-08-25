<!-- View stored in resources/views/home.blade.php -->


    @extends('layout')

    @section('main')

    <!-- expression should remain untouched -->
    <!-- <p>Hello, @ double brackets with no $ sign left of variable.</p> -->

    <form action="" method="post">
        @csrf
        <label for="name">Name:</label>
        <input type="text" name='name' id='name'>
        <label for="location">Location:</label>
        <input type="text" name='location' id='location'>
        <input type="submit" name='submit' id='submit' value='submit'>
    </form>

    @endsection



