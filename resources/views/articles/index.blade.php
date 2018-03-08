@extends('layouts.app')

@section('title', '题目列表')

@section('content')

<div class="row">
    <div class="col-lg-3 col-md-3 sidebar">
      <div class="panel panel-default">
        <div class="panel-body">
            <a href="{{ route('articles.create') }}" class="btn btn-success btn-block" aria-label="Left Align">
                <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span> 新建文章
            </a>
        </div>
      </div>
    </div>
    
    <div class="col-lg-9 col-md-9 articles-list">

        <div class="panel panel-default">

            <div class="panel-heading">
                题目列表
            </div>

            <div class="panel-body">
                {{-- 题目列表 --}}
                @include('articles._articles_list', ['articles' => $articles])
                {{-- 分页 --}}
                {!! $articles->render() !!}
            </div>
        </div>
    </div>

</div>

@endsection
