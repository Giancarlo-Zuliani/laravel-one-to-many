<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Employee;
use App\Task;

class EmployeeController extends Controller
{
    public function index(){
        $emp = Employee::all();
        return view('pages.employee-index' , compact('emp'));
    }
}
