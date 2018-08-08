@extends('layout')
@section('content')
    <h1>
        articles
    </h1>
    @foreach($articles as $article)
        <a href="{{url('articles',$article->id)}}">   <h2>{{$article->title}}</h2></a>
        <article>
            <div>
                {{$article->content}}

            </div>
        </article>
    @endforeach
@stop