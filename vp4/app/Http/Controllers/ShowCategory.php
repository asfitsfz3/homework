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
            'category_name' => '',
            'category_id' => '',
            'goods' => array(),
            'categories' => $cat
        );
        if (empty($_GET['id'])) {
            $_GET['id'] = "1";
        }

        foreach ($cat as $value) {
            if ((!empty($value)) and ($value['category_id'] == $_GET['id'])) {
                $arr['category_name'] = $value['name'];
                $arr['category_id'] = $value['category_id'];
                break;
            } else {
                    $arr['category_name'] = $cat[0]['name'];
                    $arr['category_id'] = $cat[0]['category_id'];
            }
        }


        foreach (Good::all() as $value) {
            if ($value['category_id']==$arr['category_id']) {
                array_push($arr['goods'], $value);
            }
        }


        return view('category')->with('arr', $arr);
    }
}
