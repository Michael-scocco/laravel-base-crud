@extends('layouts.main-layout')

@section('content')
    <main>
        <h1>Opsiti</h1>
        <ul>
            @foreach ($ospiti as $ospite)
                <li>
                    <a href="{{ route('details', $ospite -> id) }}">
                        {{ $ospite -> name }} {{ $ospite -> lastname }}
                    </a>
                </li>
            @endforeach
        </ul>
        <a href="{{ route('create') }}" class="link-button">
            Aggiungi Ospite
        </a>
    </main>
@endsection
