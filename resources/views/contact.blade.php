@extends('layouts.app')

@section('content')
  <h1>Contact Page</h1>

  @if (count($list))

    <ul>

      @foreach($list as $item)
        <li>{{$item}}</li>
      @endforeach

    </ul>

  @endif

@stop
