@extends('layouts.app')


@section ('content')
<form method="POST" action="/payments">
       @csrf
    
      <input type="submit" value="Make Payment">

</form>

@endsection