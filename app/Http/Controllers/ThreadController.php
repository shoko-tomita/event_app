<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateThread;
use Illuminate\Http\Request;
use App\Thread;

class ThreadController extends Controller
{

    public function showCreateForm()
    {
        return view('threads/create');
    }

    public function threadDisp()
    {
        return view('threads/disp');
    }

    // 引数にインポートしたRequestクラスを受け入れる
    public function create(CreateThread $request)
    {
    // フォルダモデルのインスタンスを作成する
    $thread = new Thread();
    // dd($request->title);
    // exit;

    // タイトルに入力値を代入する
    $thread->title = $request->title;
    $thread->thread_detail;
    $request->thread_detail;

    Auth::user()->threads()->save($thread);

    // インスタンスの状態をデータベースに書き込む
    $thread->save();

    return redirect()->route('thread_all', [
        'thread' => $thread->id,
    ]);
    }
}
