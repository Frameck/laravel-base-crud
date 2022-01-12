@php
$nav_links = [
    [
        "text"=> "Comics",
        "route_name"=> "comics.index"
    ]
]
@endphp


<header class="main-header">
    <a href="/">
        <img class="logo" src="/img/dc-logo.png" alt="dc-logo">
    </a>
    <nav>
        <ul>
            @foreach($nav_links as $link)
                @php
                    $prefix = explode('.', $link['route_name'])[0]
                @endphp
                <li>
                    <a href="{{ $prefix }}">
                        {{ strtoupper($link['text']) }}
                    </a>
                </li>
            @endforeach
        </ul>
    </nav>
</header>

<div class="hero-container"></div>