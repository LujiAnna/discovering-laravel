<?php

// eloquent
namespace App\Models;

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Blog;

// create Eloquent model
use Illuminate\Database\Eloquent\Model;



use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Controller;
use Illuminate\Database\Eloquent\Relations\HasFactory;




class Blog extends model {
 use HasFactory;

 /**
     * The $table associated with the model.
     * The $primary key associated with the table.
     * @var string
     * 
     * Indicates if the model's ID is auto-incrementing.
     * @var bool
     */
    protected $table = 'posts';
    // protected $primaryKey = 'id';
    // public $incrementing = true;
    // protected $keyType = 'string';



}