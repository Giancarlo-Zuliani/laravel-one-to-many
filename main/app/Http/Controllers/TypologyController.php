<?php

namespace App\Http\Controllers;

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
}
