@extends('layouts/app')

@section('title', 'show Post')

@section('sidebar')
    
@endsection

@section('content')


 <h1>{{$posts->title }} </h1>

<p>{{$posts->content}} </p>
@endsection