@extends('templates.base')

@section('pageTitle', 'Dc Comics')

@section('pageMain')
    <main>
        <ul>
            @foreach ($fumetti as $fumetto)
                <li>{{ $fumetto['title'] }}</li>
            @endforeach
        </ul>
    </main>
@endsection