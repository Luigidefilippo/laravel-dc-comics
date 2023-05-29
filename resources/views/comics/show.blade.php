@extends('layouts.app')


@section('content');
<div class="container">
    <h2>Realtivo Comic:<br>
        {{$comics->title}}
    </h2>
    
    <img src="{{$comics->thumb}}" alt="">
    <p>
        {{$comics->description}}
    </p>
    <ul class="list-group m-4">
        <li class="list-group-item active" aria-current="true">{{$comics->type}}</li>
        <li class="list-group-item">{{$comics->sale_date}}</li>
        <li class="list-group-item">{{$comics->series}}</li>
        <li class="list-group-item">{{$comics->price}}</li>
      </ul>
</div>


    

@endsection