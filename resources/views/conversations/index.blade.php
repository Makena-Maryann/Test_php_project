@extends('layouts.app')

@section('content')

  @foreach ($convesations as $conversation)
    <h2><a href="/conversations/{{ $conversation->id }}">{{ $conversation->title }}</a></h2>

    @continue($loop->last)

    <hr>

  @endforeach
@endsection