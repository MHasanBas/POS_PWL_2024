<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function foodBeverage()
    {
        return view('blog.foodBeverages');
    }

    public function beautyHealth()
    {
        return view('blog.beautyHealth');
    }

    public function homeCare()
    {
        return view('blog.homeCare');
    }

    public function babyKid()
    {
        return view('blog.babyKid');
    }
}
