<?php
$navBar = [
                [
                    'text' => "CHARACTERS",
                    'url' => "#",
                ],
                [
                    'text' => "COMICS",
                    'url' => "#"
                ],
                [
                    'text' => "MOVIES",
                    'url' => "#",
                ],
                [
                    'text' => "TV",
                    'url' => "#",
                ],
                [
                    'text' => "GAMES",
                    'url' => "#",
                ],
                [
                    'text' => "COLLECTIBLES",
                    'url' => "#",
                ],
                [
                    'text' => "VIDEOS",
                    'url' => "#",
                ],
                [
                    'text' => "FANS",
                    'url' => "#",
                ],
                [
                    'text' => "NEWS",
                    'url' => "#",
                ],
                [
                    'text' => "SHOP",
                    'url' => "#",
                ]
];
?>

<header>
    <div id="container">
        <div>
            <img src="{{ asset('img/dc-logo.png') }}">
        </div>
        <div id="menu">
            <ul>
                @foreach ($navBar as $link)
                    <li>
                        <a href="{{$link['url']}}">{{$link['text']}}</a>
                    </li>
                @endforeach
            </ul>
        </div>
    </div>
</header>