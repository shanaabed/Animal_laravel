<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Animal;

class AnimalController extends Controller
{

    public function index()
    {
        $animals = Animal::orderBy('id', 'asc')->paginate(20);
        // return view('contacts.index')->with('contacts'.$contacts);
        return view('animal.index', compact('animals'));
        //  return view('animal.index');
    }

    public function create()
    {
        return view('animal.create');
    }


    public function store(Request $request)
    {
        // return $request->input('name');
        $res = new Animal;
        $res->name=$request->input('name');
        $res->description=$request->input('description');
        $res->user_id=auth()->user()->id;
        $res->save();
        $request->session()->flash('msg', 'Data subbmited');
        return redirect('animal');
    }


    public function show($id)
    {
        //return Animal::find($id);

        //return view('animal.show');
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
        $attributes = request () -> validate ([
            'name' => 'required',
            'description' => 'required',
        ]);

        $animal -> update ($attributes);
        //return view('animal.index');
        return redirect () -> route ('animal.index');
    }


    public function destroy( animal $animal)
    {
        $animal -> delete ();
        return redirect () -> route ('animal.index');
    }
}
