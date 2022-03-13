<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Thread;
use Illuminate\Suport\Facades\Auth;
use App\Http\Requests\UpdateOffice;

class MypageOfficeController extends Controller
{
    public function mypageOffice($id)
    {
        return view('mypage_office/office', ['user' => User::findOrFail($id)]);
    }



    public function OfficeEdit(int $id)
{
    // dd(12345);

    $office = User::findOrFail($id);
    return view('mypage_office.edit', ['office' => $office ,]);
}


public function update(int $id, UpdateOffice $request)
{
    $office = User::findOrFail($id)-> first();
    $office->name = $request->name;
    $office->address = $request->address;
    $office->tel = $request->tel;
    $office->email = $request->email;
 
    $office->save();
    return redirect()->route('mypage.office',['id' => $id ,]);
    // return redirect('mypage_office/office');
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
