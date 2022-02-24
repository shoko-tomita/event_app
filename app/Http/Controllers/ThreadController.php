<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateThread;
use Illuminate\Http\Request;
use App\Thread;

class ThreadController extends Controller
{

    public function showCreateForm()
    {
        return view('threads.create');
    }

    // public function threadDisp()
    // {
    //     return view('threads/disp');
    // }


    public function getThread() {

        $threads = Thread::all();
        // Eloquent"Member"で全データ取得
        return view('thread_all', [
            "threads" => $threads
        ]);
    }


        public function show()
        {
            $threads = Thread::all();
            return view('threads.disp',[
                "threads" => $threads
            ]);
        }

        // public function show(int $id)
        // {
        //     $threads = Thread::all();

        //     return view('threads.disp', [
        //         'threads' => $threads,
        //         'user_id' => $id,
        //     ]);
        // }

    // スレッド作成された時のバリデーションDBに値を保存、リダイレクト
    public function create(CreateThread $request){
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

   }
