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
        <div class="containerMain">
          <div id="primocontainer">
            <div id="primaparte">
              <div id="current">
                CURRENT SERIES
              </div>
              <ul>
                        @foreach ($fumetti as $fumetto)
                            <li>
                              <a>
                                  <img src= "{{ $fumetto['thumb'] }}">
                                  <div>{{ $fumetto['title'] }}</div>
                              </a>
                            </li>
                        @endforeach
                </ul>
               <div id="more">
                  LOAD MORE
               </div>
            </div>
          </div>
        </div>
    </main>
@endsection