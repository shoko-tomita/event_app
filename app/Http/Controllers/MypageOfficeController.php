<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Thread;

class MypageOfficeController extends Controller
{
    public function mypageOffice($id)
    {
        return view('mypage_office/office', ['user' => User::findOrFail($id)]);
    }

    // /**
    //  * 指定ユーザーのプロフィール表示
    //  *
    //  * @param  int  $id
    //  * @return View
    //  */
    // public function OfficeEdit($id)
    // {

    //      return view('mypage_office/edit', ['user' => Thread::findOrFail($id)]);
    // }


    
    // public function OfficeEdit($id)
    // {
    //     return view('mypage_office/office', ['user' => User::findOrFail($id)]);
    // }


}
