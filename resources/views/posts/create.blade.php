@extends ('layout')


@section ('content')
<h1>New Article</h1>   
    <form method="POST" action="/posts">
       @csrf
       <label for="title">Title:</label><br>
       <input type="text" id="title" name="title" value="{{ old('title') }}" required><br>
       
       @error('title')
            <p>{{ $errors->first('title') }}</p>
       @enderror

       <label for="slug">Slug:</label><br>
       <input type="slug" id="slug" name="slug" value="{{ old('slug') }}" required><br>
       
       @error('slug')
            <p>{{ $errors->first('slug') }}</p>
       @enderror

       <label for="body">Content:</label><br>
       <input type="text" id="body" name="body" value="{{ old('body') }}" required><br><br>

       @error('body')
            <p>{{ $errors->first('body') }}</p>
       @enderror

       <label for="tags">Tags:</label><br>
       <select name="tags[]" multiple>
          @foreach ($tags as $tag)
               <option value="{{ $tag->id }}">{{ $tag->name }}</option>
          @endforeach
       </select><br><br>

       @error('tags')
            <p>{{ $errors->first('tags') }}</p>
       @enderror

       <input type="submit" value="Submit">
    </form>      
@endsection