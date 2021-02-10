<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Employee;
use App\Task;

class EmployeeController extends Controller
{
    public function index(){
        $emp = Employee::all();
        return view('pages.employee-index' , compact('emp'));
    }
    public function show($id){
        $emp = Employee::findOrFail($id);
        return view('pages.employee-show' , compact('emp'));
    }
    public function create(){
		return view('pages.employee-create');
	}
    public function store(Request $request){
        Employee::create($request -> all());
        
        Validator::make($request -> all(),[
            'name' => 'required|min:2|max:29',
            'lastName' => 'required|min:2|max:29',
            'dateOfBirth' => 'required|date'
        ]) -> validate();
        return redirect() -> route('index');
    }
        public function edit($id) {
        $employee = Employee::findOrFail($id);
        return view('pages.employee-edit', compact('employee'));
    }
    
    public function update(Request $request, $id) {
    
         Employee::findOrFail($id) -> update($request -> All());

         Validator::make($request -> all(), [
              'name' => 'required|min:2|max:30',
              'lastname' => 'required|min:2|max:30',
              'dateOfBirth' => 'required|date',
          ]) -> validate();
    
          return redirect() -> route('employee-show', $id);
    }
}
