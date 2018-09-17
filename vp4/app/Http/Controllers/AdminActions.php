<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Good;
use App\admin_email;
use Illuminate\Support\Facades\Auth;


class AdminActions extends Controller
{
    public function createCategory()
    {
        if (Auth::check()) {
            $status = Auth::user()->admin;

            if ($status == 1) {
                $cat = new Category();
                $cat->name = $_GET['name'];
                $cat->description = $_GET['description'];
                $cat->save();

                return view('categorycreated');
            }
        }
    }

    public function deleteCategory()
    {
        if (Auth::check()) {
            $status = Auth::user()->admin;

            if ($status == 1) {
                Category::where('name', $_GET['name'])->delete();
                return view('categorydeleted');
            }
        }
    }

    public function editCategory()
    {
        if (Auth::check()) {
            $status = Auth::user()->admin;

            if ($status == 1) {
                Category::where('name', $_GET['oldname'])
                    ->update(['name' => $_GET['name'], 'description' => $_GET['description']]);

                return view('categorycreated');
            }
        }
    }

    public function createGood()
    {
        if (Auth::check()) {
            $status = Auth::user()->admin;

            if ($status == 1) {
                $good = new Good();
                $good->name = $_GET['name'];
                $good->category_id = $_GET['category_id'];
                $good->price = $_GET['price'];
                $good->photo_id = $_GET['photo_id'];
                $good->description = $_GET['description'];
                $good->save();

                return view('categorycreated');
            }
        }
    }

    public function deleteGood()
    {
        if (Auth::check()) {
            $status = Auth::user()->admin;

            if ($status == 1) {
                Good::where('name', $_GET['name'])->delete();
                return view('categorydeleted');
            }
        }
    }

    public function editGood()
    {
        if (Auth::check()) {
            $status = Auth::user()->admin;

            if ($status == 1) {
                Good::where('name', $_GET['oldname'])
                    ->update([
                        'name' => $_GET['name'],
                        'description' => $_GET['description'],
                        'price' => $_GET['price'],
                        'photo_id' => $_GET['photo_id'],
                        'category_id' => $_GET['category_id'],
                    ]);

                return view('categorycreated');
            }
        }
    }

    public function changeEmail()
    {
        if (Auth::check()) {
            $status = Auth::user()->admin;

            if ($status == 1) {
                admin_email::where('id','1')
                    ->update([
                        'name' => $_GET['name'],
                    ]);

                return view('categorycreated');
            }
        }
    }
}
