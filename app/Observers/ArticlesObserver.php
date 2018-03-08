<?php

namespace App\Observers;

use App\Models\Articles;

// creating, created, updating, updated, saving,
// saved,  deleting, deleted, restoring, restored

class ArticlesObserver
{
    public function saving(Articles $question)
    {
    	dd($question);
		$question->content = json_encode($question->content);
		$question->answer = json_encode($question->answer);
}