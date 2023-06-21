<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tbl72190326;

class Tbl72190326Controller extends Controller
{
    public function index()
    {
        $articles = Tbl72190326::orderBy('id', 'desc')->get();
        return view('index', ['articles' => $articles]);
    }
}
