@extends('templates.base')

@section('pageTitle', 'Dc Comics')

@section('pageMain')
    <main>
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
                        <a href="{{ route('prodotto', ['series' => $fumetto['series']]) }}">
                          <img src= "{{ $fumetto['thumb'] }}">
                          <div>{{ $fumetto['series'] }}</div>
                        </a>
                      </li>
                    @endforeach
                  </ul>
               <div id="more">
                  LOAD MORE
               </div>
            </div>
          </div>
          <div id="secondocontainer">
            <div id="secondaparte">
               <ul>
                 @foreach ($mainList as $link)
                 <li>
                   <a>
                       <img src= "{{ $link['img'] }}">
                       <div>{{ $link['text'] }}</div>
                   </a>
                 </li>
                @endforeach
               </ul>
            </div>
          </div>
        </div>
    </main>
@endsection