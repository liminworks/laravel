@extends('layout')
@section('content')
    <h1>填写新文章</h1>
    {!!Form::open(['url' => '/articles'])!!}

    @include('articles.form')
    {!! Form::close() !!}
    @include('errors.error')

@stop
