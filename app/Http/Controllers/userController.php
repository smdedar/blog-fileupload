<?php

namespace App\Http\Controllers;
use App\bloguser;

use Illuminate\Http\Request;



class userController extends Controller
{
    public function index(){
        $users = bloguser::all();
        return view('user', ['users' => $users]);
    }

    public function adduser(){
        return view('adduser');
    }

    public function store(Request $request){

        bloguser::create($request->all());
        return redirect('/');
    }






}
