@extends('layouts/app')

@section('title', 'index P')

@section('sidebar')
    

  
@endsection

@section('content')
    

@foreach ($posts as $post)
<a href='posts/{{$post->id}}'> 
    <h1>{{ $post->title }} </h1>
</a>
<p> {{$post->content }}</p>

@endforeach

@endsection
