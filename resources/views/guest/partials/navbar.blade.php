<nav>
    <ul>
        @foreach ($menu as $item)
            <li><a href="{{ route($item['rotta']) }}">{{ $item['pagina'] }}</a></li>
        @endforeach
    </ul>
</nav>
