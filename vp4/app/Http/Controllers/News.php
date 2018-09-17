<?php

namespace App\Http\Controllers;

use App\Category;
use App\Good;
use Illuminate\Http\Request;

class News extends Controller
{
    public function news()
    {
        $cat = Category::all();
        $good = Good::all();
        $random_good = $good[rand(1, count($good)-1)];
        $arr = array (
            'goods' => $good,
            'categories' => $cat,
            'random_good' => $random_good
        );

        return view('news')->with('arr', $arr);
    }
}
