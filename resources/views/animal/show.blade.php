
@extends('layouts.app')

@section ('header')
    <div class="flex justify-between">
        <div class="text-4xl mb-8">
            <h1>Show Animal</h1>
        </div>
        <div>

        </div>
    </div>
@endsection

@section('content')

    <div class=" central w-1/2 text-xl bg-blue-100 px-4 py-4 border rounded border-gray-500">
        <h1>{{$animal->name}}</h1>
        <div> {{$animal->address}}</div>
        <small>written on{{$animal->created_at}}</small>
    </div>


@endsection
