<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use App\Task;
use App\Typology;

class TypologyController extends Controller
{
    public function index(){
        $typo = Typology::all();
        return view('pages.typology-index' , compact('typo'));
    }
    public function show($id){
        $typo = Typology::findOrFail($id);
        return view('pages.typology-show' , compact('typo'));
    }
    public function create() {
		return view('pages.typology-create');
	}
    public function store(Request $request){

        $data = $request  -> All();

        Validator::make($request -> all() , [
            'name' => 'required|max:30',
            'description' => 'required| min:4 | max:200',
        ]) -> validate();
        $typo = Typology::create($data);
        if (array_key_exists('tasks', $data)) {
			$tasks = Task::findOrFail($data['tasks']);
		} else {
			$tasks = [];
		}
		$typo -> tasks() -> attach($tasks);

		return redirect() -> route('typology-index');
    }
    public function edit($id){
        $typo = Typology::findOrFail($id);
        $tsk = Task::All();
        return view('pages.typology-edit' , compact('typo' , 'tsk'));
    }
    public function update(Request $request, $id) {

        $data = $request -> All();
    
        Validator::make($request -> all(), [
            'name' => 'required|max:20',
            'description' => 'required|min:5|max:200',
        ]) -> validate();
    
        $typo = Typology::findOrFail($id);
        $typo -> update($data);

        if (array_key_exists('tasks', $data)) {
            $tasks = Task::findOrFail($data['tasks']);
        } else {
            $tasks = [];
        }
    
        $typo -> tasks() -> sync($tasks);
    
          return redirect() -> route('typology-show', $id);
    }
}
