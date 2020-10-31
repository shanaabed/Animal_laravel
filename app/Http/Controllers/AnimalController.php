<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Animal;

class AnimalController extends Controller
{

    public function index()
    {
        $animals = Animal::orderBy('id', 'asc')->paginate(20);
        return view('animal.index', compact('animals'));

    }

    public function create()
    {
        return view('animal.create');
    }


    public function store(Request $request)
    {

        $res = new Animal;
        $res->name=$request->input('name');
        $res->description=$request->input('description');
        $res->user_id=auth()->user()->id;
        $res->save();
        return redirect('animal');
    }


    public function show($id)
    {

        $animal =  Animal::find($id);
        return view('animal.show', compact('animal'));

    }


    public function edit($id)
    {
        $animal =  Animal::find($id);
        return view('animal.edit', compact('animal'));
    }


    public function update(Request $request, Animal $animal)
    {
        $animal->name=$request->input('name');
        $animal->description=$request->input('description');
        $animal->save();
        return redirect('animal');
    }


    public function destroy( animal $animal)
    {
        $animal -> delete ();
        return redirect () -> route ('animal.index');
    }
}
