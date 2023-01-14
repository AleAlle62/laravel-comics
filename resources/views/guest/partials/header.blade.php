<header>
    {{-- inclusione della navabr --}}
    @include('.guest.partials.navbar')
    <div class="header"></div>
</header>

<style>
    .header {
        background-size: cover;
        height: 30vh;
        background-image: url({{ asset('images/jumbotron.jpg') }});
    }
</style>
