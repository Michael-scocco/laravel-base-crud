@extends('layouts.main-layout')

@section('content')
    <main>
        <h1>Nuovo Ospite</h1>
        <form method="POST" action="{{ route('store') }}">

            @csrf
            @method('POST')
            <div class="form">
                <label for="name">Nome: </label>
                <br>
                <input type="text" id="name" name="name">
            </div>
            <div class="form">
                <label for="lastname">Cognome: </label>
                <br>
                <input type="text" id="lastname" name="lastname">
            </div>
            <div class="form">
                <label for="date_of_birth">Data di nascita: </label>
                <br>
                <input type="date" id="date_of_birth" name="date_of_birth">
            </div>
            <div class="form">
                <label>Documento: </label>
            </div>
            <div class="form">
                <input type="radio" id="DriverLicense" name="document_type" value="Driver License">
                <label for="DriverLicense">Driver License</label>
                <br>
                <input type="radio" id="CI" name="document_type" value="CI">
                <label for="CI">CI</label>
            </div>
            <div class="form">
                <label for="document_number">Numero documento:</label>
                <br>
                <input type="text" id="document_number" name="document_number">
            </div>

            <button type="submit" class="link-button">
                Create
            </button>
    </main>
@endsection
