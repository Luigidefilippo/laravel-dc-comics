@extends('layouts.app')


@section('content')
    

<div class="container">
    <h2 style="text-align: center;">Add New Comic</h2>
    <form action="{{ route('comics.store') }}" method="POST" enctype="multipart/form-data" class="comic-form">
        @csrf
        <div class="form-group">
            <label for="name">Nome Fumetto:</label>
            <input type="text" id="name" name="name" required>
        </div>
        <div class="form-group">
            <label for="type">Tipo:</label>
            <input type="text" id="type" name="type" required>
        </div>
        <div class="form-group">
            <label for="series">Serie:</label>
            <input type="text" id="series" name="series" required>
        </div>
        <div class="form-group">
            <label for="image">Immagine:</label>
            <input type="file" id="image" name="image" accept="image/*" required>
        </div>
        <div class="form-group">
            <label for="description">Descrizione:</label>
            <textarea id="description" name="description" rows="4" required></textarea>
        </div>
        <div class="form-group" style="text-align: center;">
            <input type="submit" value="Add Comic" class="submit-button">
        </div>
    </form>
</div>

      <style>
       .container {
    max-width: 400px;
    margin: 0 auto;
}

h2 {
    text-align: center;
    margin-top: 30px;
}

.comic-form {
    background-color: #f5f5f5;
    padding: 20px;
    border-radius: 5px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

.form-group {
    margin-bottom: 20px;
}

label {
    display: block;
    font-weight: bold;
    margin-bottom: 5px;
}

input[type="text"],
textarea {
    width: 100%;
    padding: 10px;
    border: 1px solid #ccc;
    border-radius: 4px;
}

input[type="file"] {
    width: 100%;
    padding: 10px;
}

.submit-button {
    background-color: #4CAF50;
    color: #fff;
    border: none;
    padding: 10px 20px;
    border-radius: 4px;
    cursor: pointer;
    font-size: 16px;
}

.submit-button:hover {
    background-color: #45a049;
}
      </style>

@endsection