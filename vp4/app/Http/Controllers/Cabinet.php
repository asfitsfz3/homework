<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Order;
use App\Good;
use App\Category;

class Cabinet extends Controller
{
    public function showCabinet()
    {
        if (Auth::check()) {
            $arr['auth'] = "yes";
            $arr['auth_email'] = Auth::user()->email;
            $arr['auth_name'] = Auth::user()->name;
            $arr['admin'] = Auth::user()->admin;
            $arr['orders'] = Order::all();
            $arr['category'] = Category::all();
            $arr['goods'] = Good::all();
        } else {
            $arr['auth'] = "no";
        }

        if ($arr['admin']=="1") {
            $arr['admin_message'] = "Вы являетесь администратором!";
        } else {
            $arr['admin_message'] = "Вы в статусе обычного пользователя.";
        }
        return view('cabinet')->with('arr', $arr);
    }

    public function showLogout()
    {
        if (Auth::check()) {
            Auth::logout();
        }
        return view('fastlogout');
    }
}
