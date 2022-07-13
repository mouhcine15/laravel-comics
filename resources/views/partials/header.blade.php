
<header>
    <div id="container">
        <div>
            <img src="{{ asset('img/dc-logo.png') }}">
        </div>
        <div id="menu">
            <ul>
                @foreach ($headerList as $link)
                    <li>
                        <a href="{{$link['url']}}">{{$link['text']}}</a>
                    </li>
                @endforeach
            </ul>
        </div>
    </div>
</header>