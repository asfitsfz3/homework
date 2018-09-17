<?php

namespace App\Http\Controllers;

use App\Category;
use App\Good;
use App\Http\Controllers\Auth;
use Illuminate\Http\Request;

class Start extends Controller
{
    public function showStartPage()
    {
        $cat = Category::all();
        $good = Good::all();
        $random_good = $good[rand(1, count($good)-1)];
        $arr = array (
            'goods' => $good,
            'categories' => $cat,
            'random_good' => $random_good
        );

        return view('welcome')->with('arr', $arr);
    }
}
