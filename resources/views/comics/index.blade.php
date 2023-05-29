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
            <td></td>
            </tr>
        @endforeach

    </tbody>
    </table>
</div>

    
@endsection