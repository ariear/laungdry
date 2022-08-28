<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" href="/storage/{{ $systems->image }}" type="image/x-icon">
    <link rel="icon" href="/storage/{{ $systems->image }}" type="image/x-icon">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="css/style.css">
    <title>{{ $systems->system_name }}</title>
</head>
<body>
    <nav>
        <img src="/storage/{{ $systems->image }}" width="50" alt="">
        <ul>
            <li><a href="/">Home</a></li>
            <li><a href="/service">Service</a></li>
            <li><a href="/about">About</a></li>
            <li><a href="/contact">Contact</a></li>
        </ul>
    </nav>

    @yield('content')

    <footer>
        <aside>
            <h3>Informasi</h3>
            <ul>
                <li>FAQ</li>
                <li>Terms & Condition</li>
                <li>Privacy policy</li>
            </ul>
        </aside>
        <aside>
            <h3>Produk & Layanan</h3>
            <ul>
                <li>rerum</li>
                <li>id</li>
                <li>sunt</li>
                <li>aperiem</li>
            </ul>
        </aside>
        <aside>
            <h3>Info Kontak</h3>
            <ul class="info-kontak">
                <li><i class="bi bi-geo-alt"></i> {{ $systems->address }}</li>
                <li><i class="bi bi-telephone"></i> {{ $systems->no_telp }}</li>
                <li><i class="bi bi-envelope"></i> {{ $systems->email }}</li>
            </ul>
        </aside>
        <aside>
            <h3>Sosial Media</h3>
            <ul class="medsos">
                <li><a href="{{ $systems->fb }}"><i class="bi bi-facebook"></i></a></li>
                <li><a href="{{ $systems->ig }}"><i class="bi bi-instagram"></i></a></li>
                <li><a href="{{ $systems->tweet }}"><i class="bi bi-twitter"></i></a></li>
                <li><a href="{{ $systems->wa }}"><i class="bi bi-whatsapp"></i></a></li>
            </ul>
        </aside>
    </footer>
</body>
</html>
