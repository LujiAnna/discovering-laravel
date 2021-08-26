<footer>
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

    <label for="email">Like and Subscribe:</label>
    <input type="email" name='email' id='email' placeholder ='Email'>

    <input type="submit" name='subscribe' id='subscribe' value='Sign up (FREE)' >
</form>
</footer>