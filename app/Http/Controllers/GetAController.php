<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GetAController extends Controller
{
    public function index()
    {
        return view('get-a');
    }
}