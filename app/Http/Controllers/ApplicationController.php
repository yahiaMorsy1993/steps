<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Application;

class ApplicationController extends Controller
{
    public function index(){
        return view('home',compact('apps'));
    }

    public function ThanksPage(){
      return view('saved');
    }

    public function store(Request $request){
      $validator = Validator::make($request->all(), [
          'name' => 'required|max:100',
	        'position' => 'required',
	        'office' => 'required',
	        'age' => 'required',
          'salary' => 'required'
            ]);

        if ($validator->fails()) {
            return redirect('/')
                        ->withErrors($validator)
                        ->withInput();
        }
        $application = new Application;
        $application->name = $request->name;
        $application->position = $request->position;
        $application->office = $request->office;
        $application->age = $request->age;
        $application->salary = $request->salary;

        $application->save();
        return redirect('/saved');




    }
}
