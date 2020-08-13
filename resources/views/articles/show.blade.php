{{-- layoutsフォルダのapplication.blade.phpを継承 --}}
@extends('layouts.application')

{{-- @yield('title')にテンプレートごとの値を代入 --}}
@section('title', '記事詳細')

{{-- application.blade.phpの@yield('content')に以下のレイアウトを代入 --}}
@section('content')
	<h1>{{$article->title}}</h1>
	<p>{!! $article->mark_body !!}</p>
	<br><br>
	<a href="/articles/{{$article->id}}/edit">編集</a>
	<form action="/articles/{{$article->id}}" method="post">
		@csrf
		@method('delete')
		<input type="submit" name="" value="削除する">
	</form>
	<a href="/articles">一覧に戻る</a>
@endsection