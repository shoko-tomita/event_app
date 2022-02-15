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

    public function threadDisp()
    {
        return view('threads.disp');
    }


    public function index(int $id)
    {
    $threads = Thread::all();

    return view('thread_all', [
        'threads' => $threads,
        'current_thread_id' => $id,
    ]);
    }

    /**
     * タスク作成
     * @param Thread $thread
     * @param CreateThread $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function create(Thread $thread, CreateThread $request)
    {
        $thread = new Thread();
        $thread->title = $request->title;
        $thread-> thread_detail	= $request->titlthread_detail	;
        $thread->due_date = $request->due_date;

        $thread->thread()->save($thread);

        return redirect()->route('thread_all', [
            // 'id' → 'folder'
            'thread' => $thread->id,
        // 変数があっているのかわからない
        ]);
    }

}
