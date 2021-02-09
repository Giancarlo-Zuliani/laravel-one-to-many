<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Employee;
class MainController extends Controller
{
    public function index() {
        
        $emp = Employee::all();
        return view("pages.index", compact("emp"));
    }

    public function show($id) {
        
        $employee = Employee::findOrFail($id);
        return view("pages.employee-show", compact("employee"));
    }

    public function create() {
        
        return view("pages.employee-create");
    }

    public function store(Request $request) {
        
        $data = $request -> all();

        Employee::create($data);

        return redirect() -> route('employees-index');
    }

    public function edit($id) {
        
        $employee = Employee::findOrFail($id);
        
        return view("pages.employee-edit", compact("employee"));
    }

    public function update(Request $request, $id) {
        
        $employee = Employee::findOrFail($id);
        $employee -> update($request -> all());
        return redirect()-> route("employee-show", $employee -> id);
    }
}