<?php

namespace App\Http\Controllers;

use App\Models\Post;    
use Illuminate\Http\Request;
use Illuminate\Support\factories\Factory;

class postcontroller  extends Controller
{
    function index(){
    // $data = Post::with('comments')->get();
       //$data = Post::all();// Eloquent ORM get all data from the database
       //$data = Post::simplePaginate(5);// Eloquent ORM get all data from the database with pagination
        $data = Post::Paginate(10);

       //$data = Post::cursorPaginate(5);// Eloquent ORM get all data from the database with cursor pagination
       //dd($data->first()->comments); i test the relationship between the post and the comments 
       
       return view('post.index', ['posts'=>$data , "page_title" => "blog"]); //PASS the data to the view and the page title
        //return'hi from index function of postcontroller';// test the route and the controller function
    }
    function show($id){
    $post=Post::findOrFail($id); //handle the case where the post with the given ID does not exist
    return view('post.show', ['post'=>$post, "page_title" => $post->title]);
}
    function create(){
       /* $post=post::create([
            'title'=>'new unique post',
            'body'=>'this is a  a test to uniquepost',
            'author'=>'admin',
            'published'=>true
        ]);*/
        Post::factory(100)->create(); // create 100 posts using the factory
        return redirect(to:'/blog');
}
function delete(){

post::destroy(ids:6);//delete the post with the given ID
}



}