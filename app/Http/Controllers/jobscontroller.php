<?php

namespace App\Http\Controllers;
use App\Models\Job;
use Illuminate\Http\Request;  

use Illuminate\Contracts\View\View; 
   
   


class jobscontroller extends Controller
{
  function index():View {
       $jobs=Job::all();
       //dd($jobs); dump and die ...testing mechanis
    return view(view :'job/index',data:['jobs'=> $jobs, 'name'=>'leeno']);
 }
}
