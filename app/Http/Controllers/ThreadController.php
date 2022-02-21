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


    public function getThread() {

        $threads = Thread::all();   // Eloquent"Member"で全データ取得
        return view('thread_all', [
            "threads" => $threads
        ]);
    }

      /**
     * 指定ユーザーのプロフィール表示
     *
     * @param  int  $id
     * @return View
     */
    public function show($id)
    {
        return view('threads.disp', ['thread' => Thread::findOrFail($id)]);
    }

    // スレッド作成された時のバリデーションDBに値を保存、リダイレクト
    public function postCreatethread(Request $request){
        // バリデーション
        $this->validate($request,[
          'title' => 'required',
          'thread_detail' => '',
          'area' => 'required',
        ]);

        // DBインサート
        $user = new Thread([
          'title' => $request->input('title'),
          'thread_detail' => $request->input('thread_detail'),
          'area' => 'required',
        ]);

        // 保存
        $user->save();

        // リダイレクト
        return redirect()->route('thread_all');
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
