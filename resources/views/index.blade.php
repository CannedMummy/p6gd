@extends('layouts.default')

@section('page-title', 'Index')

@section('page-content')

   @foreach($sections as $view => $path)
      <a href="{{ $path }}.min.html">{{ $view }}</a>
      <br><br>
   @endforeach

@endsection