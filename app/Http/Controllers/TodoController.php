<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Todo;

class TodoController extends Controller
{
    public function index()
    {
          $todos = Todo::paginate(10);

          return view('todo.index', compact('todos') );
    }

    public function create()
    {
      return view('todo.create');
    }

    public function store(Request $request)
    {
      Todo::create( $request->all() );
                //'title'=>$request->title,
                //'url'=>$request->url,
                //'description'=>$request->description

      return redirect('todo');
    }
      public function edit(Todo $todo)
      {
        return view('todo.edit', compact('todo'));
      }
      public function update(Request $request, $id)
      {
        $todo = Todo::find($id);
        $todo->update( $request->all() );
        return redirect('todo');

      }
      public function destroy($id)
      {
        $todo = Todo::find($id);
        $todo->delete();

        return redirect('todo');
      }

      public function status($id)
      {
        $todo = Todo::find($id);
        if ($todo->status =='0') {
          $todo->update(['status'=> '1']);
        }else{
          $todo->update(['status'=> '0']);
        }
        return redirect('todo');

      }

}
