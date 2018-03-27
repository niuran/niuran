@extends('layouts.app')
@section('title', 'myDiary')

@section('meta-include')
<meta name="apple-itunes-app" content="app-id=1357419968">
@endsection

@section('content')
  
<div class="panel panel-default">
	<div class="panel-heading">
		<h2 class="text-center"><i class="glyphicon glyphicon-list-alt"></i>&nbsp;&nbsp;myDiary</h2>
		<h5 class="text-right"><a href="{{ route('feedback') }}">反馈</a></h5>
	</div>
	<div class="panel-body">
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

		<div class="row" style="margin-top: 30px;font-size: 15pt;">
			<p>
				&nbsp;&nbsp;&nbsp;&nbsp;将你的日记、笔记汇聚在一起。为你的笔记添加分类与标签，来快速查找。你可以设定每日的提醒，开启Face ID、Touch ID以保护你的隐私。将你不同设备上的的笔记同步到iCloud。
			</p>
		</div>
	</div>
</div>

@stop
