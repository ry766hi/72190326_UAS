<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostBController extends Controller
{
    public function index(Request $request)
    {
        $option = $request->input('options');
        return view('post-b', ['options' => $option]);
    }
}
