<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ThreadController extends Controller
{
    public function index(int $id)
{
    $threads = Thread::all();

    return view('thread_all', [
        'threads' => $threads,
        'current_thread_id' => $id,
    ]);
}
}
