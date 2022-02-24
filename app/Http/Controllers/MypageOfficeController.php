<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class MypageOfficeController extends Controller
{
    public function mypageOffice($id)
    {
        return view('mypage_office/office', ['user' => User::findOrFail($id)]);
    }


}
