@extends('layouts.app')

@section('content')
    <div class="container">
        <post-component :posts="{{ $posts }}"></post-component>
    </div>
@endsection
