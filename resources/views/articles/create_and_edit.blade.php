@extends('layouts.app')

@section('script-include')
<script src="/js/jquery-3.2.1.min.js" type="text/javascript"></script>
@endsection

@section('content')

<div class="container">
    <div class="col-md-10 col-md-offset-1">
        <div class="panel panel-default">

            <div class="panel-body">
                <h2 class="text-center">
                    <i class="glyphicon glyphicon-edit"></i>
                    @if($article->id)
                        编辑文章
                    @else
                        新建文章
                    @endif
                </h2>

                <hr>

                @include('common.error')

                @if($article->id)
                    <form action="{{ route('articles.update', $article->id) }}" method="POST" accept-charset="UTF-8">
                        <input type="hidden" name="_method" value="PUT">
                @else
                    <form action="{{ route('articles.store') }}" method="POST" accept-charset="UTF-8">
                @endif

                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <input type="hidden" name="userid" value="{{ Auth::id() }}">

                    <div class="form-group">
                            <input class="form-control" type="text" name="title" value="{{ old('title', $article->title ) }}" placeholder="请填写文章标题" required/>
                    </div>

                    <div class="form-group" id="content">
                        <textarea class="form-control" name="content" rows="6">{{ old('content', $article->content ) }}</textarea>
                    </div>

                    <div class="form-group">
                        <input class="form-control" type="text" name="sort" value="{{ old('sort', $article->sort ) }}" placeholder="文章编号，整数，越小越靠前"/>
                    </div>

                    <div class="well well-sm">
                        <button type="submit" class="btn btn-primary"><span class="glyphicon glyphicon-ok" aria-hidden="true"></span> 保存</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<style>
	.input-group {
		margin-bottom: 10px;
	}
</style>

@endsection
