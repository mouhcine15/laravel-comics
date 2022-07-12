@extends('tempaltes.base')

@section('pageTitle', 'Dc Comics')

@section('pageMain')
    <main>
        @foreach ($collection as $item)
            <li>{{$item['title'] }}</li>
        @endforeach
    </main>
@endsection