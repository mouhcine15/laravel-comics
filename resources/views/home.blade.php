@extends('templates.base')

@section('pageTitle', 'Dc Comics')

@section('pageMain')
    <main>
        {{-- <ul>
            @foreach ($fumetti as $fumetto)
                <li>{{ $fumetto['title'] }}</li>
            @endforeach
        </ul> --}}

        <div id="jumbo">

        </div>
        <div id="container">
          <div id="primocontainer">
            <div id="primaparte">
              <div id="current">
                CURRENT SERIES
              </div>
              <ul>
                  <li>
                        @foreach ($fumetti as $fumetto)
                            <a>
                                <img src= "{{ $fumetto['thumb'] }}">
                                <div>{{ $fumetto['title'] }}</div>
                            </a>
                        @endforeach
                  </li>
               </ul>
               <div id="more">
                  LOAD MORE
               </div>
            </div>
          </div>
        </div>
    </main>
@endsection