
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
    <section class="py-12">
        <div class="container mx-auto">
            <div>
                <h1 class="text-2xl font-black text-gray-900 pb-6 px-6 md:px-12">
                    {{$animal->name}}
                </h1>

                <div class="flex flex-wrap px-6">
                    <div class="w-full lg:w-1/2   md:px-4 lg:px-6 py-5">
                        <div class="">
                            <p>{{$animal->description}}</p>
                        </div>
                        <small>written on{{$animal->created_at}}  Created by {{$animal->user->name}}</small>
                    </div>
                </div>
            </div>
            <div>
                <a href="/animal/{{$animal->id}}/edit" class="btn btn-default">Edit </a>
                <form class="inline" method="post" action="/animal/{{$animal-> id}}">
                    @method ('DELETE')
                    @csrf
                    <input type="submit" value="Delete" class="btn btn-danger btn-block" onclick="return confirm('Are you sure you want to delete?')">
                </form>
            </div>
        </div>

@endsection
