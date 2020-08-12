{{-- layoutsフォルダのapplication.blade.phpを継承 --}}
@extends('layouts.application')

{{-- @yield('title')にテンプレートごとにtitleタグの値を代入 --}}
@section('title', '記事編集')

{{-- application.blade.phpの@yield('content')に以下のレイアウトを代入 --}}
@section('content')
	<form action="/articles/{{$article->id}}" method="post">
		@csrf {{-- 入れないとエラーになる --}}
		<div>
			<label for="title">タイトル</label>
			<input type="text" name="title" placeholder="記事のタイトルを入れる" value="{{$article->title}}">
		</div>
		<div>
			<label for="body">内容</label>
			<textarea name="body" rows="8" cols="80" placeholder="記事の内容を入れる">{{$article->body}}</textarea>
		</div>
		<div>
			@method('patch')
			<input type="submit" value="更新">
		</div>
	</form>
@endsection