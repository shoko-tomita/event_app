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



//     public function edit($id)
// {
//     $article = User::find($id->id);
//     return view('office.edit', ['user' => User::findOrFail($id)]);
// }

// public function update($id)
// {
//     $article = User::find($id->id);
//     $article->title = $id->title;
//     $article->thread_detail = $id->thread_detail;
//     $article->save();
//     return redirect('therad_all');
// }


//    /**
//      * タスク編集フォーム
//      * @param Uesr $user
//      * @return \Illuminate\View\View
//      */
//     public function showEditForm(User $user_id)
//     {

//         return view('edit', [
//             'user' => $user_id,
//         ]);
//     }

//     /**
//      * タスク編集
//      * @param Uesr $user
//      * @param EditUser $request
//      * @return \Illuminate\Http\RedirectResponse
//      */
//     public function edit( EditUser $request)
//     {
//         $this->checkRelation($user);

//         $user->title = $request->title;
//         $user->status = $request->status;
//         $user->due_date = $request->due_date;
//         $user->save();

//         return redirect()->route('therad_all', [
//             // 'id' → 'folder'
//             'user' => $user->user_id,
//         ]);
//     }

}
