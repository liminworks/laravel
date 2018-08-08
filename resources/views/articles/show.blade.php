@extends('layout')
@section('content')
    <h1>
        articles
    </h1>
<!--    --><?//= var_dump($article)?>
    {{--@foreach($articles as $article)--}}
        <h2>{{$article->title}}</h2>
        <article>
            <div>
                {{$article->content}}

            </div>
        </article>
    {{--@endforeach--}}
@stop