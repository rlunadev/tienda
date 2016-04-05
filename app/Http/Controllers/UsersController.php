<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\User;

class UsersController extends Controller
{
    public function create () {
    	//dd("hola");
    	return view('admin.users.create');
    }
    public function store (Request $request) {
    	//dd($request->all());
    	$user=new User($request->all());
    	$user->password=bcrypt($request->password);
    	$user->save();
    	dd("usuario creado");
    }
    public function index() {
    	
    	//paginacion
    	$users=user::orderBy('id','ASC')->paginate(3);
    	return view('admin.users.index')->with('users',$users);
    }
}
