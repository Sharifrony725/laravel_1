<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index($name =null){
        $name = "Rony";
        // return "I am From User Controller, My name is: " .$name;
        return view('user', compact('name'));
    }
}
