<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;
use App\Http\Requests\ArticleRequest;
use Auth;

class ArticlesController extends Controller
{
  public function __construct()
  {
      $this->middleware('auth', ['except' => ['index']]);
  }

    public function index(Article $article)
    {
        $articles = $article->where('userid', Auth::id())->orderBy('sort')->paginate(20);
        return view('articles.index', compact('articles'));
    }

  public function create(Article $article)
  {
    return view('articles.create_and_edit', compact('article'));
  }

  public function store(ArticleRequest $request, Article $article)
  {
        $article->fill($request->all());
        $article->save();
        return redirect()->route('articles.index')->with('message', '成功创建测试！');
  }

  public function edit(Article $article)
  {
      return view('articles.create_and_edit', compact('article'));
  }

  public function update(ArticleRequest $request, Article $article)
  {
      $article->fill($request->all());
      $article->save();
      return redirect()->route('articles.index')->with('message', '更新成功！');
  }

  public function destroy(Article $article)
  {
    $article->delete();

    return redirect()->route('articles.index')->with('message', '成功删除！');
  }
}
