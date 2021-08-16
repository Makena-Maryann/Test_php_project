@extends('layouts.app')

@section ('content')
    <h2>
      {{ $post->title }}
    </h2>  
    <p>
      {{ $post->body }}
    </p> 

    <p>
      @foreach ($post->tags as $tag)
          <a href="/posts?tag={{ $tag->name }}">{{ $tag->name }}</a>
      @endforeach
    </p>   
@endsection