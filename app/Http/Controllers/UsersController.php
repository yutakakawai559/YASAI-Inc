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

        //会員削除機能
    public function delete(Request $request)
        {
            $user = User::find($request->id);
            $user->delete();
            return redirect('items/users');
        }

        //会員編集機能
    public function update(Request $request, $id)
    {
     $user = User::findOrFail($id);
     $user->update($request->only(['name', 'email','alert_climate', 'alert_temperature', 'alert_shipping', 'alert_pesticide' ]));
    return redirect()->route('user.index')->with('success', 'ユーザー情報が更新されました');
    }

}
