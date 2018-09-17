<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Good;

class Search extends Controller
{
    public function search()
    {
        $arr = array ();
        foreach (Good::all() as $value) {
            if ($value['name']==$_GET['word']) {
                array_push($arr, $value);
            }
        }
        return view('searchresult')->with('arr', $arr);
    }
}
