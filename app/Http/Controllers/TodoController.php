<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Todo;

class TodoController extends Controller {
    public function index(){

        $todo = Todo::all();
        return view('index')->with('todos', $todo);

    }
    public function create() {
        return view('create');
    }
    public function details() {
        return view('todo.details');
    }
    public function edit() {
        return view('todo.edit');
    }
    public function update() {
        // @TODO
    }
    public function delete() {
        // @TODO
    }
    public function storeTodoData() {
        try {
            $this->validate(request(), [
                'name' => ['required'],
                'description' => ['required']
            ]);
        } catch (ValidationException $e) {

        }

        $data = request()->all();

        /**
         * Validate the data and store it in database.
         */
        $todo = new Todo();
        $todo->name =  $data['name'];
        $todo->description = $data['description'];
        $todo->save();

        session()->flash('success', 'Todo successfully created.');
        return redirect('/');
    }
}
