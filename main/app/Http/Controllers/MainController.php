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


}
