<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GetBController extends Controller
{
    public function index(Request $request)
    {
        $option = $request->input('option');
        return view('get-b', ['option' => $option]);
    }
}
