@extends('layouts.app')

@section ('header')
    <div class="flex justify-between">
        <div class="text-4xl mb-8">
            <h1>Animal</h1>
        </div>
    </div>
@endsection

@section('content')
    <div class="w-2/3 mx-auto">
        <div class="bg-white shadow-md rounded my-6">
            <table class="text-left w-full border-collapse">
                <thead>
                <tr>
                    <th class="py-4 px-6 bg-grey-lightest font-bold uppercase text-sm text-grey-dark border-b border-grey-light">Animals</th>
                    <th class="py-4 px-6 bg-grey-lightest font-bold uppercase text-sm text-grey-dark border-b border-grey-light">Actions</th>
                </tr>
                </thead>
                <body>
                @foreach($animals as $animal)
                    <tr class="hover:bg-grey-lighter">
                        <td class="py-4 px-6 border-b border-grey-light">{{$animal->name}}</td>
                        <td class="py-4 px-6 border-b border-grey-light">
                            <a href="/animal/{{$animal->id}}/edit" class="text-grey-lighter font-bold py-1 px-3 rounded text-xs bg-green hover:bg-green-dark">Edit</a>
                            <a href="animal/{{$animal->id}}" class="text-grey-lighter font-bold py-1 px-3 rounded text-xs bg-blue hover:bg-blue-dark">View</a>
                        </td>
                    </tr>
                @endforeach
                </body>
            </table>
@endsection
