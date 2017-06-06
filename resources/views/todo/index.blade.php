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
                <th>Status</th>
                <th>Control</th>
                <th>Actions</th>
              </tr>

              @foreach($todos as $todo)
                <tr>
                  <td>{{ $todo->id }}</td>
                  <td>{{ $todo->title }}</td>
                  <td>{{ $todo->url }}</td>
                  <td>{{ $todo->description }}</td>
                  <td>
                    @if ($todo->status == '0')
                        close to website
                    @else
                        open to website
                    @endif
                  </td>

                    <td>
                    {{--<a href="todo/{{ $todo->id }}" type="text" class="btn btn-warning">Edit</a>--}}

                      <form action="/todo/{{ $todo->id }}/up" method="post">
                        {{ csrf_field() }}
                        <input name="_method" type="hidden" value="DELETE">
                        @if ($todo->status == '0')
                          <button type="submit" class="btn  btn-success">open</button>
                        @else
                          <button type="submit" class="btn  btn-danger">close</button>
                        @endif

                      </form>


                  </td>

                  <td>
                    <form method="post" action="/todo/{{ $todo->id }}">
                      <input name="_token" type="hidden" value="{{ csrf_token() }}">
                      <input name="_method" type="hidden" value="DELETE">

                      <a href="todo/{{ $todo->id }}/edit" type="text" class="btn btn-warning">Edit</a>
                      <button type="submit" class="btn  btn-danger">Delete</button>
                    </form>
                  </td>
              </tr>
                @endforeach
            </table>
            {{ $todos->links() }}  {{-- ใส่ link ไปหน้าอื่นข้างล่างตาราง --}}
  </div>
@endsection
