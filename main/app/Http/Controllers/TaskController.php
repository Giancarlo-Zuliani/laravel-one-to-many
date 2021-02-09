<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Task;
use App\Employee;
use App\Typology;

class TaskController extends Controller
{
    public function index(){
        $tsk = Task::all();
        return view('pages.task-index' , compact('tsk'));
    }
    public function show($id){
        $tsk = Task::findOrFail($id);
        return view('pages.task-show' , compact('tsk'));
    }
}
