@extends('layouts.app')

@section('content')


  <div class="container">

          <h1>Todo</h1>
          <a href="todo/create" type="text" class="btn btn btn-primary">New Todo</a>

            <table class="table table-bordered">
              <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Title</th>
                <th>Url</th>
                <th>Description</th>
                <th>Time</th>
                <th>Status</th>
                <th>Control</th>
                <th>Actions</th>

              </tr>

              @foreach($todos as $todo)
                <tr>
                  <td>{{ $todo->id }}</td>
                  <td>{{ $todo->user->name }}</td>
                  <td>{{ $todo->title }}</td>
                  <td>{{ $todo->url }}</td>
                  <td>{{ $todo->description }}</td>
                  <td>{{ $todo->date }}</td>
                  <td>
                    @if ($todo->status == '0')
                        close to website
                    @else
                        open to website
                    @endif
                  </td>

                  <td>
                    <form method="post" action="/todo/{{ $todo->id }}">
                      <input name="_token" type="hidden" value="{{ csrf_token() }}">
                      <input name="_method" type="hidden" value="DELETE">

                      <a href="todo/{{ $todo->id }}/edit" type="text" class="btn btn-warning">Edit</a>
                      <button type="submit" class="btn  btn-danger">Delete</button>
                    </form>
                  </td>

                  <td>
                    <!-- Large modal -->
                        <button type="button" class="btn btn-primary" data-toggle="modal"
                        data-target=".bs-example-modal-lg">Show</button>
                        <div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog"
                        aria-labelledby="myLargeModalLabel">
                        <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                          <h4 class="modal-title" id="myModalLabel">Modal title</h4>
                        </div>
                          <div class="modal-dialog modal-lg" role="document">
                            <div class="modal-content">
                              ID : {{ $todo->id }}<br>
                              TITLE : {{ $todo->title }}<br>
                              URL : {{ $todo->url }}<br>
                              DESCRIPTION : {{ $todo->description }}<br>
                              STATUS : @if ($todo->status == '0')
                                  close to website
                              @else
                                  open to website
                              @endif
                            </div>
                              <div class="modal-footer">
                             <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>

                           </div>
                          </div>
                        </div>
                  </td>


              </tr>
  @endforeach
            </table>

            {{ $todos->links() }}  {{-- ใส่ link ไปหน้าอื่นข้างล่างตาราง --}}
  </div>
    
@endsection
{{--<link rel="javascript" type="text/javascript" href="datetime.js">--}}
