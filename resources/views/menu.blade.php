<!DOCTYPE html>
<html>
<head>
    <title>Menu</title>
    <link rel="stylesheet" href="{{ asset('menu.css') }}">
</head>
<body>
    <header>
        <div class="welcome">
            Selamat Datang
        </div>
    </header>
    <main>
        <div class="cardbox">
            <a href="{{ route('formulir_pendaftaran') }}" class="card">Formulir Peminjaman</a>
            <a href="{{ route('riwayat_peminjaman') }}" class="card">Riwayat</a>
            <a href="{{ route('profil') }}" class="card">Profil</a>
        </div>
    </main>
</body>
</html>
