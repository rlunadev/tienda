<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Route;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\User;
use App\Http\Requests\UserRequest;

class UsersController extends Controller
{ 

    public function create () {
    	//dd("hola");
    	return view('admin.users.create');
    }

    public function store (UserRequest $request) {
    	//dd($request->all());
    	$user=new User($request->all());
    	$user->password=bcrypt($request->password);
    	$user->save();
    	//dd("usuario creado");
        return redirect()->route('admin.users.index');
    }

    public function index() {
    	
    	//paginacion
    	$users=user::orderBy('id','ASC')->paginate(3);
    	return view('admin.users.index')->with('users',$users);
    }

    public function destroy($id) {
        
        $user = User::find($id);
        $user->delete();
        return redirect()->route('admin.users.index');
       // dd($user);
    }
    public function edit($id) {
        
        $user=User::find($id);
        //dd($user);
        return view('admin.users.edit')->with('user',$user);
    }
    public function update(Request $request, $id) {
        //dd($request->all());
        $user=User::find($id);
        $user->name=$request->name;
        $user->email=$request->email;
        $user->type=$request->type;
        $user->save();
        //dd($user);
        return redirect()->route('admin.users.index');
    }
}
