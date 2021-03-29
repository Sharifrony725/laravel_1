<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        return 'This  is landing page';
    }
    public function test(){
        return 'This is test page';
    }
}
