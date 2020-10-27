@extends('layouts.app')

@section ('header')
    <div class="flex justify-between">
        <div class="text-4xl mb-8">
            <h1>Animal</h1>
        </div>
    </div>
@endsection

@section('content')

    <div class="flex-center position-ref full-height">
        <table>
            <tr>
                <td>Id</td>
                <td>Name</td>
                <td>Description</td>
                <td>Created At</td>
            </tr>

            @foreach($animals as $animal)
                <tr>
                    <td>{{$animal->id}}</td>
                    <td>{{$animal->name}}</td>
                    <td>{{$animal->description}}</td>
                    <td>{{$animal->created_at}}</td>

                    <td> <a href="animal/{{$animal->id}}"class="btn btn-default">Show </a></td>


                    <td> <a href="/animal/{{$animal->id}}/edit" class="btn btn-default">Edit </a></td>


                    <form class="inline" method="post" action="{{ $animal->id }}">
                        @method ('DELETE')
                        @csrf
                        <td> <input type="submit" value="Delete" class="btn btn-danger btn-block" onclick="return confirm('Are you sure you want to delete?')"> </td>
                    </form>
                </tr>
            @endforeach
        </table>
    </div>
@endsection
