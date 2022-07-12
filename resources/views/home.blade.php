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
                 {{-- <li v-for="(link, i) in prodotti" :key="i">
                    <a>
                      <img :src="link.thumb" alt="">
                      <div>
                        {{link.series}}
                      </div>
                    </a>
                 </li> --}}
                 @foreach ($fumetti as $fumetto)
                    <li>{{ $fumetto['title'] }}</li>
                    <img src{{ $fumetto['thumb'] }}>
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