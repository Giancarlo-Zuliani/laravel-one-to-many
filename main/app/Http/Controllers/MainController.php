<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Task;
use App\Employee;

class MainController extends Controller
{
    public function index(){
        $emp = Employee::all();
        return view('pages.index', compact('emp'));
    }
    public function show($id){
        $emp = Employee::findOrFail($id);
        return view('pages.show', compact('emp'));
        
    }
    public function createTask(){
        $empl = Employee::all();
        return view('pages.create-task' , compact('empl'));
    }

    public function store(Request $request){

        $task = Task::make($request -> all());
        $emp = Employee::findOrFail($request -> get('employee_id'));
        $task -> employee() -> associate($emp);
        $task -> save();

        return redirect() -> route('home');
    }

    public function editTask($id){
        $empl = Employee::all();
        $task = Task::findOrFail($id);
        $thisemp = Employee::findOrFail($task -> employee_id);
        return view('pages.edit-task' , compact('task' , 'empl' , 'thisemp'));
    }

    public function update(Request $request ,$id){
        $task = Task::findOrFail($id);
        $emp = EMployee::findOrFail($request -> get('employee_id'));
        $task -> employee() -> associate($emp);
        
        $task -> update($request -> all());
        return redirect() -> route('home');

    }

    public function destroyTask($id){
       Task::destroy($id);
       return redirect() -> route('home');
    }
}
