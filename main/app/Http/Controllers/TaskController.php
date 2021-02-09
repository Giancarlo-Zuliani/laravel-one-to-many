<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

use App\Task;
use App\Typology;
use App\Employee;

class TaskController extends Controller
{
    public function index() {

        $tasks = Task::all();
        return view("pages.task-index", compact("tasks"));
    }
    public function show($id) {

        $task = Task::findOrFail($id);
        return view("pages.task-show", compact("task"));
    }

    public function create() {

        $employees = Employee::all();
        $typologies = Typology::all();

        return view("pages.task-create", compact("employees", "typologies"));
    }

    public function store(Request $request) {
        
        $data = $request -> all();

        $employee = Employee::findOrFail($data["employee_id"]);
        $newTask = Task::make($request -> all());
        $newTask -> employee() -> associate($employee);
        $newTask -> save(); 

        $typologies = Typology::findOrFail($data['typologies']);
        $newTask -> typologies() -> attach($typologies);
        
        return redirect() -> route("task-index");
    }

    public function edit($task_id) {

        $employees = Employee::all();
        $typologies = Typology::all();
        
        $task = Task::findOrFail($task_id);

        return view("pages.task-edit", compact("task", "employees", "typologies"));

    }

    public function update(Request $request, $id) {

        $data = $request -> all();
        
        $employee = Employee::findOrfail($data["employee_id"]); 
        $task = Task::findOrFail($id); 
        $task -> update($data); 
        $task -> employee() -> associate($employee); 
        $task -> save(); 
        $typs = Typology::findOrFail($data['typologies']); 

        $task -> typologies() -> sync($typs);
        return redirect() -> route("task-show", $task -> id);

    }
}
