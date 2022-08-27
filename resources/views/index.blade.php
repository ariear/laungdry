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

<article class="parent-form-check-message">
    <div class="form-check-message">
        <h2>Cek Pesanan</h2>
        <div class="wrap-input-check-message">
            <div class="input-check-message">
                <i class="bi bi-journal-text"></i>
                <input type="text" placeholder="No. Invoice">
            </div>
            <div class="input-check-message">
                <i class="bi bi-journal-text"></i>
                <input type="text" placeholder="No. Invoice">
            </div>
            <div class="input-check-message">
                <i class="bi bi-journal-text"></i>
                <input type="text" placeholder="No. Invoice">
            </div>
            <div class="input-check-message">
                <i class="bi bi-journal-text"></i>
                <input type="text" placeholder="No. Invoice">
            </div>
        </div>
        <button>Cek</button>
    </div>
</article>
@endsection
