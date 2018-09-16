<?php

namespace App\Http\Controllers;

use App\Mail\OrderMail;
use Illuminate\Http\Request;
use App\Order;
use Illuminate\Support\Facades\Mail;



class MakeOrder extends Controller
{
    public function makeOrder()
    {
        if ((empty($_GET['e'])) or (empty($_GET['e'])) or (empty($_GET['e']))) {
            echo "!@$%6";
        } else {
            $ord = new Order;
            $ord->email = $_GET['e'];
            $ord->good_id = $_GET['g'];
            $ord->name = $_GET['n'];
            $ord->save();

            $par = array (
                'email' => $ord->email,
                'id' => $ord->good_id,
                'name' => $ord->name
            );
            Mail::to('asfitsfz3@yandex.ru')->send(new OrderMail($par));

        }
    }
}
