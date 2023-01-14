@extends('guest.layouts.base')

@section('content')

    <h2>sono la homepage</h2>
    <h2>clicca su :</h2>
    <h1> COMICS (nella navbar)</h1>

@endsection


<style>
    main {
        display: flex;
        flex-direction: column;
        gap: 20px;
        text-align: center;
        align-items: center;
    }

    h1:hover {
        background-color: blue;
        color: white;
        transition: 1s;
        border-radius: 10px;
    }
</style>


