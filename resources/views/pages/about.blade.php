@extends('app')
@section('content')
<h1>I'm a handsome man</h1>

<p>
  <ul>
  @foreach ($people as $person)
  <li>{{ $person}}</li>
  @endforeach</ul>
  </p>
@stop
