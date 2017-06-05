@extends('layouts.app')

@section('content')
  <div class="container">

          <h1>Todo</h1>
          <a href="todo/create" type="text" class="btn btn btn-primary">New Todo</a>

            <table class="table table-bordered">
              <tr>
                <th>Id</th>
                <th>Title</th>
                <th>Url</th>
                <th>Description</th>
                <th>Actions</th>
              </tr>

              @foreach($todos as $todo)
                <tr>
                  <td>{{ $todo->id }}</td>
                  <td>{{ $todo->title }}</td>
                  <td>{{ $todo->url }}</td>
                  <td>{{ $todo->description }}</td>
                  <td>
                      <a href="todo/{{ $todo->id }}/edit" type="text" class="btn btn-xs btn-default">Edit</a>
                      <a href="#" type="text" class="btn btn-xs btn-danger">Delete</a>
                  </td>
              </tr>
                @endforeach
            </table>
            {{ $todos->links() }}  {{-- ใส่ link ไปหน้าอื่นข้างล่างตาราง --}}
  </div>
@endsection
