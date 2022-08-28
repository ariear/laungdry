@extends('template')
@section('content')
    <div class="contact" >
        <h2>Contact</h2>
        <p>Anda bisa menghubungi kami di</p>
        <div>
            <a href="{{ $systems->fb }}"><i class="bi bi-facebook"></i></a>
            <a href="{{ $systems->wa }}"><i class="bi bi-whatsapp"></i></a>
            <a href="{{ $systems->ig }}"><i class="bi bi-instagram"></i></a>
            <a href="{{ $systems->tweet }}"><i class="bi bi-twitter"></i></a>
        </div>
    </div>
@endsection
