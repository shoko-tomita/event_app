<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateThread;
use Illuminate\Http\Request;
use App\Thread;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\UpdateThread;


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
    public function create(CreateThread $request){
        // バリデーション
        $this->validate($request,[
          'title' => 'required',
          'thread_detail' => '',

        ]);

        // DBインサート
        $user = new Thread();

        $user->user_id = Auth::id();
        $user->title = $request->input('title');
        $user->thread_detail = $request->input('text');
        $user->category_id = 1;

        // 保存
        $user->save();

        // リダイレクト
        return redirect()->route('thread_all');
      }

    //   public function ThreadEdit(int $id)
    //   {
    //       // dd(12345);

    //       $user = Thread::findOrFail($id);
    //       return view('threads.edit', ['user' => $user ,]);
    //   }


    //   public function ThreadUpdate(int $id, UpdateThread $request)
    //   {
    //     $user = User::findOrFail($id)-> first();
    //     $user->user_id = Auth::id();
    //     $user->title = $request->input('title');
    //     $user->thread_detail = $request->input('text');
    //     $user->category_id = 1;


    //       $user->save();
    //       return redirect()->route('threads.disp', ['thread' => Thread::findOrFail($id)]);
    //       // return redirect('mypage_office/office');
    //   }

   }
