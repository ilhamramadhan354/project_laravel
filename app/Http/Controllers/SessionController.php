<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class SessionController extends Controller
{
    public function store(Requests $request){
    	$valid  = array(
    						'username' => 'required',
    						'password' => 'required',
    					);
    	$validate = Validator::make($request->all(), $valid);
    	if ($validate->fails()) {
    		return Redirect::to('session/create')->withErrors($validate)
    											 ->withInput();
    	}
    	if(Auth::attempt(array('username' => $request->username,'password' => $request->password),($request->remember ? true : false))){
    		Session::flash('error', 'Login Fails, Username or password is wrong');
    		return Redirect::to('session/create')->withInput();
    	}
    }
}
