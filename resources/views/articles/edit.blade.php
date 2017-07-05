@extends('app')
@section('content')
    <h1>编辑文章</h1>
    <h2>{{ $article->title }}</h2>
    {!! Form::model($article, ['method'=> 'PATCH', 'url'=> '/articles/'.$article->id]) !!}
    @include('articles.form')
    {!! Form::close() !!}
    @include('errors.list')
@endsection