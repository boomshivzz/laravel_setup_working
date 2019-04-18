@extends('layouts/app')

@section('title', 'Edit P')

@section('sidebar')
  

    
@endsection

@section('content')
     <form action="/posts/{{$posts->id}}" method="POST">
        @csrf
  <div class="form-group">
      
     
    <label for="title">Title</label>
    <input type="text" class="form-control" id="title" name="title"  placeholder="Enter Title" value="{{$posts->title}}">
    
  </div>
  <div class="form-group">
    <label for="Content">Content</label>
    <Textarea  class="form-control" id="content" name="content" placeholder="Enter the Content">
{{$posts->content}}</Textarea>
  </div>
  
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
        



@endsection
