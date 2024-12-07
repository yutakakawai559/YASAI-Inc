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
        return view('user.index', compact('item/users'));

    }
}
