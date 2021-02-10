<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
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
    public function create() {
        $emp = Employee::all();
        $typo = Typology::all();
		return view('pages.task-create' , compact('emp' , 'typo'));
	}

    public function store(Request $request){
        $data = $request -> all();
          Validator::make($request -> all(),[
            'title' => 'required|max:30',
            'description' => 'required|min:5',
        ])-> validate(); 

        $tsk = Task::make($data);
        $emp = Employee::findOrFail($request -> get('employee_id'));
        $tsk -> employee() -> associate($emp);
        $tsk -> save();
       
        if (array_key_exists('tasks', $data)) {
			$typo = Typology::findOrFail($data['typologies']);
		} else {
			$typo = [];
		}

		$tsk -> typologies() -> attach($typo);

		return redirect() -> route('task-index');
    }
    
    public function edit($id) {
		$task = Task::findOrFail($id);
		$typologies = Typology::All();
		$employees = Employee::All();
		return view('pages.task-edit', compact('task','employees', 'typologies'));
	}
    
    public function update(Request $request, $id) {

		$data = $request -> All();

		Validator::make($request -> all(), [
			'title' => 'required|max:20',
			'description' => 'required|min:5|max:200',
		]) -> validate();

		$task = Task::findOrFail($id);
		$employee = Employee::findOrFail($data['employee_id']);
		$task -> update($data);
		$task -> employee() -> associate($employee);
		$task -> save();

		if (array_key_exists('tasks', $data)) {
			$typologies = Typology::findOrFail($data['typologies']);
		} else {
			$typologies = [];
		}
		$task -> typologies() -> sync($typologies);

		return redirect() -> route('task-show', $id);
	}

}
