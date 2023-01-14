<nav>
    <ul>
        {{-- logo --}}
        <img src="{{ asset('images/dc-logo.png') }}" alt="logo">
        {{-- menu preso dall'array associativo del php --}}
        @foreach ($menu as $item)
            <li>
                <a href="{{ route($item['rotta']) }}">{{ $item['pagina'] }}</a>
            </li>
        @endforeach
    </ul>
</nav>

<style>
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }
    ul {
        display: flex;
        justify-content: center;
        align-items: center;
        gap: 30px;
        list-style-type: none;
        height: 10vh;
        text-decoration: none;
        background-color: white;
    }
    a {
        color: black;
        text-decoration: none;
        font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
    }
    a:hover {
        transition: 0.5s;
        color: blue;
        border-bottom: 3px solid blue;
    }
    img {
        height: 40%;
    }
</style>
