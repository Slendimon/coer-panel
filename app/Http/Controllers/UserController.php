<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function index(){
        $users = User::paginate(10);
        return view('users.index', compact('users'));
    }
    public function create(){
        return view('users.create');
    }

    public function store( Request $request){
        User::create($request->only('name', 'username', 'email')
            + [ 
                'password' => bcrypt( $request->input('password')),
            ]);
        return redirect()->route('users.index')->with('success','Usuario registrado correctamente.');
    }
    public function show($id){
        $user = User::find($id);
        dd($user);
        return view('users.show', compact('user'));
    }
}
