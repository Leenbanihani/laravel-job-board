<?php

namespace App\Http\Controllers;

use App\Models\Post;    
use App\Models\Tag;
use Illuminate\Http\Request;


class tagcontroller  extends Controller
{
    function index(){
  
       $data = Tag::all();// Eloquent ORM get all data from the database
       return view('tag.index', ['tags'=>$data , "page_title" => "Tags"]); //PASS the data to the view and the page title
 
    }

    function create(){
       Tag::create([
            'title'=>'my new one',
           
        ]);
        
        return redirect(to:'/tags');
}

function test_manytomany(){
 /*$post7=Post::find(7);
 $post8=Post::find(8);


 $post7->tags()->attach([1,2]); // attach the tags with id 1 and 2 to the post with id 7
 $post8->tags()->attach([1]);

return response()->json([

'post7'=>$post7->tags,
'post8'=>$post8->tags

]);*/

$tag=Tag::find(1);
$tag->posts()->attach(1);
return response()->json([
 'tag'=>$tag->title,
 'posts'=>$tag->posts


]);


}}