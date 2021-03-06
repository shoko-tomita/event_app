<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Users;

class UserController extends Controller
{
        public function getSignup(){
            return View('user.signup');
        }

        // public function getProfile(){
        //     return view('user.signup');
        //   }

        public function postSignup(Request $request){
            // バリデーション
            $this->validate($request,[
              'name' => 'required',
              'email' => 'email|required|unique:users',
              'password' => 'required|min:4',
              'area' => 'required',
              'experience' => 'required'
            ]);

            // DBインサート
            $user = new Users([
              'name' => $request->input('name'),
              'email' => $request->input('email'),
              'password' => bcrypt($request->input('password')),
              'area' => 'required',
              'experience' => 'required'
            ]);

            // 保存
            $user->save();

            // リダイレクト
            return redirect()->route('thread_all');
          }
}
