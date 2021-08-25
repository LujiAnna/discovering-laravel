<!-- View stored in resources/views/home.blade.php -->

<html>
    <body>
        
    <!-- include header or layout for both header and footer -->

    <!-- add section here -->

    @extends('layout')

    @section('container')

    <!-- expression should remain untouched -->
    <!-- <p>Hello, @ double brackets with no $ sign left of variable.</p> -->

    <form action="">
        <label for="name">Name:</label>
        <input type="text" name='name' id='name'>


    </form>

    @endsection

    <!-- include footer -->

    </body>
</html>



