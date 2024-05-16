<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function displayEmail(){
        return view('email');
    }

    public function displayFace(){
        return view('admin.face');
    }
}