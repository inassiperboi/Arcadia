<!-- resources/views/daftar.blade.php -->

<!DOCTYPE html>
<html>
<head>
    <title>Pendaftaran Perpustakaan Arcadia</title>
    <link rel="stylesheet" href="{{ asset('daftar.css') }}">
</head>
<body>
    <h1>Pendaftaran Perpustakaan Arcadia</h1>

    @if ($errors->any())
        <div>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    @if (session('success'))
        <div>
            {{ session('success') }}
        </div>
    @endif

    <form method="POST" action="{{ route('daftar') }}">
        @csrf
        <div>
            <label for="nama_peminjam">Nama:</label>
            <input type="text" id="nama_peminjam" name="nama_peminjam" value="{{ old('nama_peminjam') }}" required>
        </div>
        <div>
            <label for="user_peminjam">Username:</label>
            <input type="text" id="user_peminjam" name="user_peminjam" value="{{ old('user_peminjam') }}" required>
        </div>
        <div>
            <label for="pass_peminjam">Password:</label>
            <input type="password" id="pass_peminjam" name="pass_peminjam" required>
        </div>
        <div>
            <label for="pass_peminjam">Konfirmasi Password:</label>
            <input type="password" id="pass_peminjam" name="pass_peminjam" required>
        </div>
        <div>
            <button type="submit">Daftar</button>
        </div>
        <div class="box">
            <p>Sudah punya akun? <a href="{{ route('login') }}">Masuk</a></p>
        </div>
        
    </form>
</body>
</html>
