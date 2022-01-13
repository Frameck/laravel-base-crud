@php
$nav_links = [
    [
        "text"=> "Comics",
        "route_name"=> "comics"
    ],
    [
        "text"=> "create",
        "route_name"=> "comics/create"
    ],
    [
        "text"=> "update",
        "route_name"=> "comics/update"
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
                    <a href="{{ $link['route_name'] }}">
                        {{ strtoupper($link['text']) }}
                    </a>
                </li>
            @endforeach
        </ul>
    </nav>
</header>

<div class="hero-container"></div>