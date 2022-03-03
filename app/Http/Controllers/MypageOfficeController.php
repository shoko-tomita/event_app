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

   /**
     * タスク編集フォーム
     * @param Uesr $user
     * @return \Illuminate\View\View
     */

    public function OfficeEdit($id)
{
    $article = User::find($id->user_id);
    return view('office.edit', ['user' => User::findOrFail($id)]);
}

   /**
      * タスク編集
      * @param Uesr $user
      * @param User $request
      * @return \Illuminate\Http\RedirectResponse
      */

public function update($id)
{
    $article = User::find($id->user_id);
    $article->name = $id->names;
    $article->address = $id->address;
    $article->tel = $id->tel;
    $article->email = $id->email;
    $article->save();
    return redirect('mypage.office');
}


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
