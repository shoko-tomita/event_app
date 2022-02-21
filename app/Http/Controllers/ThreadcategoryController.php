<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ThreadcategoryController extends Controller
{
    public function showFood()
    {
        return view('category/food');
    }

    public function showWorkshop()
    {
        return view('category/workshop');
    }

    public function showPhoto()
    {
        return view('category/photo');
    }

    public function showBeauty()
    {
        return view('category/beauty');
    }

    public function showSeminar()
    {
        return view('category/seminar');
    }

    public function showOther()
    {
        return view('category/other');
    }
}
