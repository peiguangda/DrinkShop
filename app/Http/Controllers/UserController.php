<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UserController extends Controller
{


    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index()
    {
    	$users = User::all();
    	return view('user.index')->with('users', $users);
    }


    public function create()
    {
    	return view('user.create');
    }

    
    public function store(Request $request)
    {
    	if ($request->get('password') != $request->get('rePassword')) {
    		return redirect()->back()->with('notice', 'Passwords do not match');
    	}

    	User::create([
    		'name' => $request->get('name'),
    		'email' => $request->get('email'),
    		'status' => $request->get('status'),
    		'password' => $request->get('password')
    		]);

    	return redirect()->back()->with('notice', 'Add user OK!!!');
    }


    public function edit($id)
    {
    	$user = User::find($id);
    	return view('user.edit')->with('user', $user);
    }


    public function update($id, Request $request)
    {
    	$user = User::find($id);

    	if ($request->get('password') != $request->get('rePassword')) {
    		return redirect()->back()->with('notice', 'Passwords do not match');
    	}

    	$user->update([
    		'name' => $request->get('name'),
    		'password' => $request->get('password'),
    		'status' => $request->get('status')
    		]);
    	return redirect()->route('user.index')->with('notice', 'Update Ok!!!');
    }


    public function destroy($id)
    {
    	$user = User::find($id);
    	$user->delete();
    	return redirect()->route('user.index')->with('notice', 'Delete '.$user->name.' successful');
    }

}
