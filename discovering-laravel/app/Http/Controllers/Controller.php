<?php

namespace App\Http\Controllers;
// namespace App\Http\Controllers\UserController;


use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

use Illuminate\Support\Facades\View;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function user()
    {
        // TODO: prepare my data , then load view
        return view('user'); 
    }

    public function home()
    {
        // TODO: prepare my data , then load view
        return View::make('home', ['name' => 'Anne']);   
    }

    public function contact()
    {
        // TODO: prepare my data , then load view
        return View::make('contact');   
    }

    public function submitContact()
    {
        // TODO: process form contact , then load view
        return "Submitted Contact";   
    }

    
}


