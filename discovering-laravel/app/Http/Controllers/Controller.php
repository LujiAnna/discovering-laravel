<?php

namespace App\Http\Controllers;
// add the laravel extension

use Illuminate\Http\Request;

use App\Models\Blog; // do same for Comments, Posts classes/models etc
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
        $blog = Blog::get();
        return $blog;   
    }

    public function contact()
    {
        return View::make('contact');   
    }

    public function submitContact(Request $request)
    {
    /**
     * Store a new blog in the database.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
       
            // Validate the request...

            $blog = new Blog;

            $blog->title = $request->title;
            $blog->body = $request->body;

            $blog->save();
          
    }


    
}


