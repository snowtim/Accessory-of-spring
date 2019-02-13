<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\User;

class UserController extends Controller
{
    public function index() {

    	return view('User.userinfo');

    }

    public function store(Request $request) {

     	$validator = Validator::make($request->all(),[
    		'user_id' => 'required|string',
    		'name' => 'required|string|max:255',
    		'email' => 'required|string|max:255',
    		'sex' => 'required|boolean',
    		'birthday' => 'required|string',
    		'phone' => 'required|string',
    		'address' => 'required|string|max:255',
    		'password' => 'required|string'
    	]);	
    	if($validator->fails()) {
    		echo "Check the information you key in.";
    	}

    	User::create([
    		'user_id' => request('user_id'),
    		'name' => request('name'),
    		'email' => request('email'),
    		'sex' => request('sex'),
    		'birthday' => request('birthday'),
    		'phone' => request('phone'),
    		'address' => request('address'),
    		'password' => request('password')
    	]);

    	return redirect('/userinfo');
    }

    public function update(Request $request) {

    	//$result = User::where('user_id', '=', $request('user_id'));
    	$user = User::where('user_id', '=', $request('user_id'))
    			->update();
    	//$result->update();	

    }

    public function delete() {

    }
}
