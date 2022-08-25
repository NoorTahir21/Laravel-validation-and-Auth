<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
class signupcontroller extends Controller
{
    public function getData(Request $request) {
    	$request->validate([
    		'name'=>'required|max:10',
    		'email'=>'required|email|unique:signup',
    		'password'=>'required|min:10',
    	]);
    	DB::table('signup')->insert([
    		'name'=>$request->name,
    		'email'=>$request->email,
    		'password'=>Hash::make($request->password),
    	]);
    	return back()->with('success','YOUR DATA IS INSERTED');
    	// return $request->input();
    }
    public function login(Request $request) {
    	$request->validate([
    		'email'=>'required',
    		'password'=>'required',
    	]);	
        $user = DB::table('signup')->where('email','=',$request->email)->first();
    if ($user) {
        if ($user->password==$request->password) {
            echo "user login";
        }
        else {
            echo "Email and password doesn't match";
        }
    }
    }
    
}
