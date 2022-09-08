<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TodoController extends Controller {
    public function index() {
        $todo = Todo::all();
        return view('index')-> with('todos', $todo);
    }
    public function create() {
        return view('todo.create');
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
}
