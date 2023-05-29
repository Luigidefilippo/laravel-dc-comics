@extends('layouts.app')

@section('content')
<div class="container">
        <h2>Comics</h2>
        <table class="table">
    <thead>
        <tr>
        <th scope="col">id</th>
        <th scope="col">Name</th>
        <th scope="col">tipologia</th>
        <th scope="col">Azioni</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($comics as $comic)
        <tr>
            <th scope="row">{{$comic->id}}</th>
            <td>{{$comic->title}}</td>
            <td>{{$comic->type}}</td>
            <td>

                <a href="{{ route('comics.show', $comic->id) }}" class="btn btn-primary">
                    <i class="fa-solid fa-link"></i>
                </a>

            </td>
            </tr>
        @endforeach

    </tbody>
    </table>
    <div class="my-2 text-center">
        <a href="{{route('comics.create')}}">Add New Comics </a>

    </div>
</div>

    
@endsection