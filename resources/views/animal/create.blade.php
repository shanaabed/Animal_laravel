@extends('layouts.app')

@section ('header')
    <div class="flex justify-between">
        <div class="text-4xl mb-8">
            <h1>Create Animal</h1>
        </div>
    </div>
@endsection

@section('content')
    <form method="post" action="/animal/">
        @csrf
        <table>
            <tr>
                <td>Name</td>
                <td><input type="textname" name="name"></td>
            </tr>

            <tr>
                <td>Description</td>
                <td><textarea class="form-textarea mt-1 block w-full" rows="3" cols="50" name="description" ></textarea></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" name="submit"></td>
            </tr>

        </table>
    </form>
@endsection
