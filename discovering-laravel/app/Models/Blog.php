<?php

namespace App\Models;

// create Eloquent model
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;

    public function comments() 
    {

    }

}

