@extends('layouts.app')

@section('content')
  <link rel="stylesheet" media="all" type="text/css" href="{{asset('date/jquery-ui.css')}}" />
  <link rel="stylesheet" media="all" type="text/css" href="{{asset('date/jquery-ui-timepicker-addon.css')}}" />

  <script src="{{asset('date/jquery-1.10.2.min.js')}}"></script>
  <script  src="{{asset('date/jquery-ui.min.js')}}"></script>

  <script  src="{{asset('date/jquery-ui-timepicker-addon.js')}}"></script>
  <script  src="{{asset('date/jquery-ui-sliderAccess.js')}}"></script>

  <script type="text/javascript">


  $(function(){
    $("#dateInput").datepicker({
      dateFormat: 'yy-mm-dd'
    });
  });

  </script>

  <div class="container">
    <h1>Edit</h1>
          <form method="post" action="/todo/ {{ $todo->id }}">
              {{ csrf_field() }}

            <div class="form-group">
              <label for="title">Title</label>
              <input type="text" class="form-control" name="title" id="title" placeholder="Title" value="{{ $todo->title }}">
            </div>
            <div class="form-group">
              <label for="url">Url</label>
              <input type="text" class="form-control"  name="url" id="url" placeholder="Url" value="{{ $todo->url }}">
            </div>
            <div class="form-group">
              <label for="description">Description</label>
              <input type="text" class="form-control"  name="description" id="description" placeholder="Description" value="{{ $todo->description }}">
            </div>
            <div class="form-group">
              <label for="dateInput">Date</label>
              <input type="text" class="form-control"  name="date" id="dateInput" placeholder="Date" value="{{ $todo->date }}">
            </div>


            <button type="submit" class="btn btn-primary">Edit</button>
          </form>
  </div>
@endsection
