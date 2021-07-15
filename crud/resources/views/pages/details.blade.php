
@extends('layouts.main-layout')

@section('content')
    <main>
        <h1>Ospite</h1>
        <ul>
            <li>Nome: <span class="green">{{ $ospite -> name }}</span></li>
            <li>Cognome: <span class="green">{{ $ospite -> lastname }}</span></li>
            <li>Data di nascita: <span class="green">{{ date('d/m/Y', strtotime($ospite -> date_of_birth)) }}</span></li>
            <li>Documento: <span class="green">{{ $ospite -> document_type }}</span></li>
            <li>Numero Documento: <span class="green">{{ $ospite -> document_number }}</span></li>
        </ul>
    </main>
@endsection
