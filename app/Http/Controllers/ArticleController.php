<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function index(Request $request)
    {
        $query = Article::query();
        //キーワード検索
        if($request->filled('keyword')){
            $keyword = $request->input('keyword');
            $query->where('title', 'like', "%{keyword}%")
                  ->orWhere('content', 'like', "%{keyword}%");
        }
        $article = $query->get();
        return view('resources.views.articles.index', compact('users'));
    }
}
