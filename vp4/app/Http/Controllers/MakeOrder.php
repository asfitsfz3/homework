<?php

namespace App\Http\Controllers;

use App\Mail\OrderMail;
use Illuminate\Http\Request;
use App\Order;
use App\admin_email;
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
            $em = admin_email::first();
            Mail::to($em['name'])->send(new OrderMail($par));

        }
    }
}
