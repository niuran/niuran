@extends('layouts.app')
@section('title', '首页')

@section('meta-include')
<meta name="apple-itunes-app" content="app-id=1357419968">
@endsection

@section('content')

<div class="panel panel-default">
	<div class="panel-heading">
		<!-- <h2 class="text-center"><i class="glyphicon glyphicon-list-alt"></i>&nbsp;&nbsp;最新文章</h2> -->
		<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
		  <!-- Indicators -->
		  <ol class="carousel-indicators">
		    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
		    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
		    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
		  </ol>

		  <!-- Wrapper for slides -->
		  <div class="carousel-inner" role="listbox">
		    <div class="item active">
		      <img src="/uploads/images/carousel-1.png" style="margin: auto;" class="img-responsive" alt="笔记本">
		      <div class="carousel-caption">
		        创建你的笔记本
		      </div>
		    </div>
		    <div class="item">
		      <img src="/uploads/images/carousel-2.png" style="margin: auto;" class="img-responsive" alt="笔记">
		      <div class="carousel-caption" style="color: black;">
		        记录生活中的所见所闻
		      </div>
		    </div>
		    <div class="item">
		      <img src="/uploads/images/carousel-3.png" style="margin: auto;" class="img-responsive" alt="关于">
		      <div class="carousel-caption" style="color: black;">
		        用Face ID / Touch ID保护你的笔记
		      </div>
		    </div>
		  </div>

		  <!-- Controls -->
		  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
		    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
		    <span class="sr-only">Previous</span>
		  </a>
		  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
		    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
		    <span class="sr-only">Next</span>
		  </a>
		</div>
	</div>
	<div class="panel-body">
		@foreach ($articles as $article)
		<div>
			<h4 class="text-center">{{ $article->title }}</h4>
			<p>{{ $article->content }}</p>
		</div>
		@endforeach

		<div style="margin-bottom: 16px; margin-left: 16px; margin-top: 16px;">
			<a href="https://itunes.apple.com/cn/app/mydiary-personal-note-book/id1357419968?mt=8" style="display:inline-block;overflow:hidden;background:url(https://linkmaker.itunes.apple.com/assets/shared/badges/en-us/appstore-lrg.svg) no-repeat;width:135px;height:40px;background-size:contain;"></a>
		</div>
	</div>
</div>

@stop
