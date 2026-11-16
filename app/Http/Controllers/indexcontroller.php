<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class indexcontroller extends Controller
{
    function index(){

    return view(view:'index',data:["page_title"=>"HOME"]);
    }
     function about(){

    return view(view:'about',data:["page_title"=>"About us"]);
    }
     function contact(){

    return view(view:'contact',data:["page_title"=>"Contact us"]);
    }
}
