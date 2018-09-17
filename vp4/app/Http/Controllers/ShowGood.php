<?php

namespace App\Http\Controllers;

use App\Category;
use App\Good;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ShowGood extends Controller
{
    public function showGood()
    {
        $cat = Category::all();
        $good = Good::all();

        $random_good = $good[rand(1, count($good)-1)];

        $arr = array (
            'goods' => $good,
            'categories' => $cat,
            'category_name' => "",
            'good_name' => "",
            'good_pic' => "",
            'good_id' => "",
            'good_price' => "",
            'good_description' => "",
            'category_id' => "",
            'auth' => "no",
            'auth_email' => "",
            'auth_name' => "",
            'random_good' => $random_good
        );

        if (Auth::check()) {
            $arr['auth'] = "yes";
            $arr['auth_email'] = Auth::user()->email;
            $arr['auth_name'] = Auth::user()->name;
        } else {
            $arr['auth'] = "no";
        }

        if (empty($_GET['id'])) {
            $_GET['id'] = "1";
        }

        foreach ($good as $value) {
            if ((!empty($value)) and ($value['good_id']==$_GET['id'])) {
                $arr['good_name'] = $value['name'];
                $arr['good_pic'] = $value['photo_id'];
                $arr['good_price'] = $value['price'];
                $arr['good_description'] = $value['description'];
                $arr['good_id'] = $value['good_id'];
                $arr['category_id'] = $value['category_id'];
                break;
            } else {
                $arr['good_name'] = $good[0]['name'];
                $arr['good_pic'] = $good[0]['photo_id'];
                $arr['good_price'] = $good[0]['price'];
                $arr['good_description'] = $good[0]['description'];
                $arr['category_id'] = $good[0]['category_id'];
            }
        }

        foreach ($cat as $value) {
            if ((!empty($value)) and ($value['category_id']==$arr['category_id'])) {
                $arr['category_name'] = $value['name'];
                break;
            } else {
                $arr['category_name'] = $cat[0]['name'];
            }
        }




        return view('good')->with('arr', $arr);
    }
}
