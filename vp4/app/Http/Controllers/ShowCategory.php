<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;

class ShowCategory extends Controller
{
    public function showCategory()
    {
        $cat = Category::all();
        foreach ($cat as $value) {
            if ((!empty($value)) and ($value['category_id']==$_GET['id'])) {
                return view('category')->with('arr', $value['name']);
            }
        }
    }
}
