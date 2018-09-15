<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;

class Start extends Controller
{
    public function showStartPage()
    {
        $res = Category::all();
        return view('welcome')->with('res', $res);
    }
}
