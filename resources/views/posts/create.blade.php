@extends('layouts/app')

@section('title', 'Create P')

@section('sidebar')
    





    <form action="/posts" method="POST">
        @csrf
  <div class="form-group">
      
     
    <label for="title">Title</label>
    <input type="text" class="form-control" id="title" name="title"  placeholder="Enter Title">
    
  </div>
  <div class="form-group">
    <label for="Content">Content</label>
    <Textarea  class="form-control" id="content" name="content" placeholder="Enter the Content">
      </Textarea>
  </div>
  
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
        






@endsection

@section('content')
    <p>This is my body description.</p>
@endsection
