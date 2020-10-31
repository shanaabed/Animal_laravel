@extends('layouts.app')

@section('content')
    <main class="sm:container sm:mx-auto sm:mt-10">
        <div class="w-full sm:px-6">

            @if (session('status'))
                <div class="text-sm border border-t-8 rounded text-green-700 border-green-600 bg-green-100 px-3 py-4 mb-4" role="alert">
                    {{ session('status') }}
                </div>
            @endif

            <section class="flex flex-col break-words bg-white sm:border-1 sm:rounded-md sm:shadow-sm sm:shadow-lg">

                <header class="font-semibold bg-gray-200 text-gray-700 py-5 px-6 sm:py-6 sm:px-8 sm:rounded-t-md">
                    Dashboard
                    <p class="text-gray-700" align="center">
                        You are logged in!
                    </p>

                </header>
                @if(count($animals)>0)
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
                @else
                    <p>No animals have been created by you.</p>
                @endif
            </section>
        </div>
    </main>
@endsection
