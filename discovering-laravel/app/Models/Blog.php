<?php

namespace App\Models;

// create Eloquent model
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;

    // relationship with posts
    public function comments() 
    {
        // read the docs
        // return $this -> belongTo(); //hasMany 
    }

    // build query 
}

// Error: Class 'App\Http\Controllers\Blog' not found
// Try: to use port 3306 ? 
// or try: open from localhost http://localhost/discovering-laravel/discovering-laravel/public/home
// solution: refresh the table with  php artisan migrate:fresh and php artisan db:seed

// join with Eloquent
