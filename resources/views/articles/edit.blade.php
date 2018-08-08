@extends('layout')
@section('content')
    <h1>修改新文章</h1>
    {!!Form::model($article, ['method' => 'PATCH', 'url' => '/articles/'.$article->id])!!}
    @include('articles.form')
    {!! Form::close() !!}
    @include('errors.error')


@stop
