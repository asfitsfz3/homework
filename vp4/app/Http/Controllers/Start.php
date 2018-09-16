<?php

namespace App\Http\Controllers;

use App\Category;
use App\Good;
use Illuminate\Http\Request;

class Start extends Controller
{
    public function showStartPage()
    {
        $cat = Category::all();
        $good = Good::all();
        $arr = array (
            'goods' => $good,
            'categories' => $cat
        );

        return view('welcome')->with('arr', $arr);
    }
}
