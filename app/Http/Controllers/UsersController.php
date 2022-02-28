<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UsersController extends Controller
{
    public function withdrawal(Request $request){
        // dd($request);
        // exit;

        return redirect(route('index.create'));
        }

}
