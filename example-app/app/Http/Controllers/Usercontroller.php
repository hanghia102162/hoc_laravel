<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;

class Usercontroller extends Controller

{
    //
    function index(){

        $users = User::all();
        return view('mvc',compact('users'));
    }
}
