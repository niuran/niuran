<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Article;

class PagesController extends Controller
{
    public function root(Article $article) {
    	$articles = $article->where('userid', 1)->orderBy('sort')->paginate(20);
    	return view('pages.root', compact('articles'));
    }

    public function info() {
    	$user = User::where('id', 1)->first();
    	return view('pages.info', compact('user'));
    }
}
