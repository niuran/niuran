@extends('layouts.app')
@section('title', '首页')

@section('content')
  
<div class="panel panel-default">
	<div class="panel-heading">
		<h2 class="text-center"><i class="glyphicon glyphicon-list-alt"></i>&nbsp;&nbsp;最新文章</h2>
	</div>
	<div class="panel-body">
		@foreach ($articles as $article)
		<div>
			<h4>{{ $article->title }}</h4>
			<p>{{ $article->content }}</p>
		</div>
		@endforeach
	</div>
</div>

@stop
