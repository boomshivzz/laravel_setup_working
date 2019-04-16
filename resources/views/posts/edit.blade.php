@extends('layouts/app')

@section('title', 'Edit P')

@section('sidebar')
    @parent

    <p>This is appended to the master sidebar.</p>
@endsection

@section('content')
    <p>This is the edit content.</p>
@endsection
