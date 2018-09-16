<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Order;

class MakeOrder extends Controller
{
    public function makeOrder()
    {
        $ord = new Order;
        $ord->email = $_GET['e'];
        $ord->good_id = "1";
        $ord->name = $_GET['n'];
        $ord->save();
    }
}
