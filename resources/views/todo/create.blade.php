@extends('layouts.app')

@section('content')
  <div class="container">

          <h1>Create</h1>
          <form method="post" action"todo">
            <div class="form-group">
              <label for="title">Title</label>
              <input type="text" class="form-control" id="title" placeholder="Title">
            </div>
            <div class="form-group">
              <label for="url">Url</label>
              <input type="text" class="form-control" id="url" placeholder="Title">
            </div>
            <div class="form-group">
              <label for="description">Description</label>
              <input type="text" class="form-control" id="description" placeholder="Title">
            </div>


            <button type="submit" class="btn btn-primary">Submit</button>
          </form>
  </div>
@endsection
