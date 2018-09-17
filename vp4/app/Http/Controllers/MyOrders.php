<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Order;
use App\Good;
use App\Category;
use Illuminate\Support\Facades\Auth;

class MyOrders extends Controller
{
    public function myOrders()
    {
        if (Auth::check()) {
            $cat = Category::all();
            $good = Good::all();
            $orders = Order::all();
            $random_good = $good[rand(1, count($good)-1)];
            $arr = array (
                'goods' => $good,
                'categories' => $cat,
                'random_good' => $random_good,
                'my_goods' => array()
            );

            foreach ($orders as $value) {
                if ($value['name'] == Auth::user()->name) {
                    foreach ($good as $val) {
                        if ($val['good_id']==$value['good_id']) {
                            //array_push($arr['my_goods'], $val);
                            $arr['my_goods'][]=$val;
                        }
                    }
                }
            }
            return view('myorders')->with('arr', $arr);
        }
    }
}
