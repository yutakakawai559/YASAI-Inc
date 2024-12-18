<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    /**
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * ユーザー一覧
     */
    public function index()
    {
        //会員一覧取得
        $users = User::all();
        return view('item.user.index', compact('users'));

    }

        //会員編集画面
    public function edit(Request $request, $id)
    {   
        $user = User::findOrFail($id);
        return view('item.edit',['user' => $user]);
    }

        //placeholder背景事前入力
    public function holder(Request $request)
    {

    }

        //会員編集機能
    public function update(Request $request, $id)
    {
     $user = User::findOrFail($id);
     $user->update($request->only(['name', 'email']));
    return redirect()->route('user.index')->with('success', 'ユーザー情報が更新されました');
    }

}
