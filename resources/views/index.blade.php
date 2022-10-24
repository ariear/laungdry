@extends('template')
@section('content')
<main>
    <aside class="main-side-left" >
        <h1>A better you start with clean clothes</h1>
        <p>The main concept of Mechka is quality, simplicity and accessibility.</p>
        <button>Read more</button>
    </aside>
    <aside>
        <img src="/images/right-img.png" alt="">
    </aside>
</main>

<livewire:check-order />
@endsection
