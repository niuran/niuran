@extends('layouts.app')

@section('meta-include')
<meta name="apple-itunes-app" content="app-id=1357419968">
@endsection

@section('content')

<div class="container">
    <div class="panel panel-default col-md-10 col-md-offset-1">
        <div class="panel-heading">
            <h4>
                <i class="glyphicon glyphicon-edit"></i> myDiary使用反馈
            </h4>
        </div>

	@include('common.error')

        <div class="panel-body">

            <form action="{{ route('feedback.store') }}" method="POST" accept-charset="UTF-8">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">

                <div class="form-group">
                    <label for="email-field">邮 箱</label>
                    <input class="form-control" type="text" name="email" id="email-field" value="" />
                </div>
                <div class="form-group">
                    <label for="introduction-field">使用反馈</label>
                    <textarea name="feedback" id="feedback" class="form-control" rows="3"></textarea>
                </div>
                
                <div class="well well-sm">
                    <button type="submit" class="btn btn-primary">保存</button>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection
