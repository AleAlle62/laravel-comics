@extends('guest.layouts.base')

@section('content')
    {{-- iterare le card attraverso l'array associativo --}}
    @foreach ($comics as $item)
        <img src="{{ $item['thumb'] }}" alt="/">
        <div> {{ $item ['series'] }}</div>
    @endforeach
@endsection
