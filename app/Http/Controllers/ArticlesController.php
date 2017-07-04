<?php

namespace App\Http\Controllers;

use App\Article;
use App\Http\Requests\createArticleRequest;
use Carbon\Carbon;
use Illuminate\Http\Request;

class ArticlesController extends Controller
{
    public function index()
    {
//        $articles = Article::latest()->where('published_at','<=',Carbon::now())->get();
        $articles = Article::latest()->published()->get();
//        return 'Articles Page';
//        return $articles;
        return view('articles.index', compact('articles'));
    }

    public function show($id)
    {
//        dd($id);
        $article = Article::findOrFail($id);
//        if (is_null($article)){
//            abort(404);
//        }
        dd($article->created_at->diffForHumans());
        return view('articles.show', compact('article'));
    }

    public function create()
    {
        return view('articles.create');
    }

//    验证的两种方式
//    public function store(createArticleRequest $request)
    public function store(Request $request)
    {
//        dd($request->all());
//        接收post过来的数据
//        存入数据库
//        重定向
//        $input['published_at']=Carbon::now();
        $this->validate($request, ['title'=>'required|min:3','content'=>'required']);
        Article::create($request->all());
        return redirect('/articles');
    }
}
