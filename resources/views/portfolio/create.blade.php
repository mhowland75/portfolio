

@extends('layouts.app')
@section('content')
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
<form class="form-horizontal" method="POST" action='/portfolio'>
    {{ csrf_field()}}
  <div class="form-group">
    <label class="control-label col-sm-2" for="name">Website Name:</label>
    <div class="col-sm-10">
      <input name='name' type="text" class="form-control" id="name" placeholder="Enter name of website">
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2" for="url">URL:</label>
    <div class="col-sm-10">
      <input name='url' type="text" class="form-control" id="url" placeholder="Enter URL">
    </div>
  </div>
     
  <div class="form-group">
    <label class="control-label col-sm-2" for="repository">Repository:</label>
    <div class="col-sm-10">
      <input name='repository' type="text" class="form-control" id="repository" placeholder="Enter repository URL">
    </div>
  </div>
     <div class="form-group">
    <label class="control-label col-sm-2" for="description">Description:</label>
    <div class="col-sm-10">
      <input name='description' type="text" class="form-control" id="description" placeholder="Enter description">
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2" for="image">Image:</label>
    <div class="col-sm-10">
      <input name='image' type="text" class="form-control" id="image" placeholder="Enter image">
    </div>
  </div>

  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" class="btn btn-default">Submit</button>
    </div>
  </div>
</form> 

@endsection
