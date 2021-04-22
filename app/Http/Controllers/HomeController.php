<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use DB;
class HomeController extends Controller
{
  
    public function index()
    {
        if (Auth::guest()){
            return view('home', ['temp' => []]);
        }
        $email = Auth::user()->email;
        $temp = "select * from quiz where email='$email';";
        $temp = DB::select($temp);
        return view('home', ['temp' => $temp]);
    }

    function about () {
        return view('about');
    }

    function contactpost(Request $request) {
        $fname=$request->input('first');
        $lname=$request->input('last');
        $email=$request->input('Email');
        $message=$request->input('message');
        $temp="INSERT INTO contact  VALUES ('$fname', '$lname', '$email', '$message');";
        $temp=DB::statement($temp);
        return redirect('/');
    }

    function contact(){
        return view('contact');
    }
}
