@extends('guest.layouts.base')

@section('content')
    {{-- iterare le card attraverso l'array associativo --}}
    @foreach ($comics as $item)
        <div class="card">
            <img src="{{ $item['thumb'] }}" alt="/">
            <div class="serie"> {{ $item ['series'] }}</div>
        </div>
    @endforeach
@endsection




<style>
    main {
        color: white;
        display: flex;
        flex-wrap: wrap;
        background-color: black;
        gap: 50px;
        justify-content: center;
        align-items: center;
        font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
    }

    .card {
        margin-top: 20px;
    }

    .card img {
        height: 70%;
    }

    .serie {
        text-align: center;
        margin-top: 10px;
        word-wrap: break-word;
    }
</style>

