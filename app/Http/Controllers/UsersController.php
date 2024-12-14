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

        //会員編集
    public function edit(Request $request)
    {   
        
        return view('item.user.edit');
    }

    public function executeFunction(Request $request)
    {
        //関数のロジック
        return response()->json(['message' => 'Function executed successfully!']);
    }

    public function showForm()
    {
        //データベースから情報を取得　例：ユーザーモデルから名前を取得
        $user = User::find(['id']);
        return view('my-form', ['user' => $user]);
    }
}
