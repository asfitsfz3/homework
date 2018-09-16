<?php

namespace App\Http\Controllers;

use App\Category;
use App\Good;
use Illuminate\Http\Request;

class ShowCategory extends Controller
{
    public function showCategory()
    {
        $cat = Category::all();
        $arr = array (
            'category_name' => '123',
            'goods' => array(),
            'categories' => $cat
        );
        foreach ($cat as $value) {
            if ((!empty($value)) and ($value['category_id']==$_GET['id'])) {
                $arr['category_name'] = $value['name'];
                break;
            } else {
                $arr['category_name'] = $cat[0]['name'];
            }
        }
        //$arr['goods'] = Good::all();

        foreach (Good::all() as $value) {
            if ($value['category_id']==$_GET['id']) {
                array_push($arr['goods'], $value);
            }
        }
        return view('category')->with('arr', $arr);
    }
}
