<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ThreadAllController extends Controller
{
    function index() {
        $threads = DB::select('select title thread_detail from threads');
        return view('thread_all',['threads' => $threads]);
}
}
