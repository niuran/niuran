<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Article;
use App\Models\Feedback;
use App\Http\Requests\FeedbackRequest;

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

    public function diary() {
    	return view('pages.diary');
    }

    public function feedback() {
    	return view('pages.feedback');
    }

    public function feedback_store(FeedbackRequest $request, Feedback $feedback) {
    	$feedback->fill($request->all());
        $feedback->save();
        return redirect()->route('diary')->with('message', '反馈成功！');
    }
}
