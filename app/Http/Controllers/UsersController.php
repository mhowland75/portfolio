<?php

namespace App\Http\Controllers;

use App\User;

use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function index(){
        $x = 'hello';
    //return view('admin.users.index', compact('x'));
     // return view('admin.users.index',['text'=>'text'] );
        return view ('admin.users.index')
        ->with('text','text');
    }
    public function create(){
        return view('admin.users.create');
    }
    public function store(Request $request ){
        User::create($request->all());
        return 'success';
        
    }
}
