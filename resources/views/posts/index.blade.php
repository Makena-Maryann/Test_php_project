@extends ('layout')

@section ('content')
  @forelse ($posts as $post)
    <h2>
      <a href="/posts/{{ $post->id }}">
      {{ $post->title }}
      </a>
    </h2>  
    <p>
      {{ $post->body }}
    </p> 

     <a href="/posts/{{$post->id}}/edit">Edit</a> 

    {!!Form::open(['action' => ['PostsController@destroy', $post->id], 'method' => 'POST'])!!}
          {{Form::hidden('_method', 'DELETE')}}
          {{Form::submit('Delete')}}
    {!!Form::close()!!} 

  @empty
    <p>No relevant posts yet!</p>            
  @endforelse
@endsection