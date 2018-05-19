<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Application;

class AdminController extends Controller
{
    public function index(){
      return view('admin' , compact('views') );
    }
}
