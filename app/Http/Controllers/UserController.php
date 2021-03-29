<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index($name =null){
        // return "I am From User Controller, My name is: " .$name;
        return view('user');
    }
}
