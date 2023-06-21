<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostAController extends Controller
{
    public function index()
    {
        return view('post-a');
    }
}
