<!-- View stored in resources/views/home.blade.php -->

<!-- view: defines -->
<!-- layout: shows -->

<!-- what is this one: its the page -->




    <!-- include header or layout for both header and footer -->

    <!-- add section here -->

    @extends('layout')

    @section('container')

    <!-- expression should remain untouched -->
    <!-- <p>Hello, @ double brackets with no $ sign left of variable.</p> -->
    <p>Hello, {{ $name }}.</p>

    @endsection

    <!-- include footer -->

