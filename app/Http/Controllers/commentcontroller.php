<?php

namespace App\Http\Controllers;

use App\Models\comment;    
use Illuminate\Http\Request;

class commentcontroller  extends Controller
{
    function index(){
     
       $data = comment::all();// Eloquent ORM get all data from the database
       return view('comment.index', ['comments'=>$data , "page_title" => "blog"]); //PASS the data to the view and the page title

    }

    function create(){
       /* comment::create([
            'author'=>'new author',
            'content'=>'new comment another content',
            'post_id'=>6 // assuming a default post ID
        ]);*/
        comment::factory(100)->create(); // create 100 comments using the factory
        return redirect(to:'/comments');
}



}