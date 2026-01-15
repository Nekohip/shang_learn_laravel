<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CatController extends Controller
{
    public function cat_index()
    {
        return view("cat.cat_index");
    }

    public function cat_hello()
    {
        return view("cat.cat_hello");
    }
}
