<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Task;
use App\Typology;

class TypologyController extends Controller
{
    public function index() {

        $typologies = Typology::all();
        return view("pages.typologies-index", compact("typologies"));
    }

    public function show($id) {

        $typology = Typology::findOrFail($id);
        return view("pages.typology-show", compact("typology"));
    }

    public function create() {

        $tasks = Task::all();

        return view("pages.typology-create", compact("tasks"));
    }

    public function store(Request $request) {

        // dd($request -> all());
        $data = $request -> all();

        $tasks = Task::findOrFail($data["tasks"]); // Collection delle task selezionate da front end

        $newTypology = Typology::create($request -> all()); // uso il create perchè devo già avere l'id della typology creata
        $newTypology -> tasks() -> attach($tasks);
        $newTypology -> save();
                
        return redirect() -> route ("typologies-index");

    }

    public function edit($id) {

        $tasks = Task::all();
        $typology = Typology::findOrFail($id);

        return view("pages.typology-edit", compact("typology", "tasks"));

    }

    public function update(Request $request, $id) {

        // dd($request -> all());

        $data = $request -> all();
        
        $typology = Typology::findOrFail($id);
        $typology -> update($data);

        $tasks = Task::findOrfail($data["tasks"]); // tasks associate alla typology
        $typology -> tasks() -> sync($tasks);
        
        $typology -> save();

        return redirect() -> route("typology-show", $typology -> id);
    }
}
