<?php

namespace App\Http\Controllers;

use App\Models\blog;
use App\Models\courses;
use App\Models\team;
use Illuminate\Http\Request;

class test extends Controller
{
 public function test(){
     $blog = blog::with('comment')->get();
     return $blog;
 }
 public function test2(){
    $dr = team::with('courses')->get();
    return $dr;
}
}
