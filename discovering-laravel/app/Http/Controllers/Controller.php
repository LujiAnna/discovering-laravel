<?php

namespace App\Http\Controllers;
// namespace App\Http\Controllers\UserController;

// add the laravel extension
// use App-model - Blog // and for Comments 

use App\Models\Blog;
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
         // normally query starts then model. Laravel does vice versa
        //  TODO: Connect model -> prepare this one in .env and php artisan make:model Blog --all
        //  TODO: Build query 

        
        // get means execute
        $blog = Blog::get();
         dd($blog);

        // connect blog with posts
        // avoid n+1 problem: query PLUS foreach

        // use 'first' method etc 

        //  dd($ponies[0]->color);
        //  dd(PONY::where('color', 'pink'));


         // ORM- Object Relational Map
         // read docs laravel, database, eloquent
        //  can chain relationships with ->



        //  assignment: save data instead in the form -- CRUD
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
        // TODO: show data after loading view, 
        // dd('chicken'); //die and dump (like var dump)

        // add form name
        // return request() -> input('name');

        // read docs
        // return request() -> only(['name', 'location']);
        return request() -> only(['title', 'body']);

        // return View::make('contact');   
        // return "Submitted Contact";   
    }


    
}


