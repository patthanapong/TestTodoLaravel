@extends('layouts.app')

@section('content')

  <script type="text/javascript">
  $(function(){
  	$("#dateInput").datepicker({
  		dateFormat: 'yy-mm-dd'
  	});
  });

  </script>


  <div class="container">
    <h1>Create</h1>
          <form method="post" action="/todo">
              {{ csrf_field() }}

            <div class="form-group">
              <label for="title">Title</label>
              <input type="text" class="form-control" name="title" id="title" placeholder="Title">
            </div>
            <div class="form-group">
              <label for="url">Url</label>
              <input type="text" class="form-control"  name="url" id="url" placeholder="Url">
            </div>
            <div class="form-group">
              <label for="description">Description</label>
              <input type="text" class="form-control"  name="description" id="description" placeholder="Description">
            </div>
            <div class="form-group">
              <label for="date">Date</label>
              <input type="text" class="form-control"  name="date" id="dateInput" placeholder="Date">
            </div>


            <button type="submit" class="btn btn-success">Submit</button>
          </form>
  </div>
@endsection
