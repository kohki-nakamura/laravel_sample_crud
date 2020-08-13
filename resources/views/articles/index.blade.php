{{-- layoutsフォルダのapplication.blade.phpを継承 --}}
@extends('layouts.application')

{{-- @yield('title')にテンプレートごとにtitleタグの値を代入 --}}
@section('title', '記事一覧')

{{-- application.blade.phpの@yield('content')に以下のレイアウトを代入 --}}
@section('content')
	<div>
		<a href="/articles/create">新規作成</a>
	</div>
	@foreach ($articles as $article)
		<h4>{{$article->title}}</h4>
		<p>{!! $article->mark_body !!}</p>
		<a href="/articles/{{$article->id}}">詳細</a>
		<a href="/articles/{{$article->id}}/edit">編集</a>
		<form action="/articles/{{$article->id}}" method="post">
			@csrf
			@method('delete')
      <input type="submit" name="" value="削除する">
    </form>
		<hr>
	@endforeach
@endsection