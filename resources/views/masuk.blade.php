<!DOCTYPE html>
<html>
<head>
    <title>Masuk Perpustakaan Arcadia</title>
    <link rel="stylesheet" href="{{ asset('masuk.css') }}">
</head>
<body>
    <h1>Masuk Perpustakaan Arcadia</h1>
    @if ($errors->any())
        <div class="error">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    @if (session('success'))
        <div class="success">
            {{ session('success') }}
        </div>
    @endif

    <form method="GET" action="{{ route('formulir_pendaftaran') }}">
        @csrf
        <div>
            <label for="user_peminjam">Username:</label>
            <input type="text" id="user_peminjam" name="user_peminjam" value="{{ old('user_peminjam') }}" required>
        </div>
        <div>
            <label for="pass_peminjam">Password:</label>
            <input type="password" id="pass_peminjam" name="pass_peminjam" required>
        </div>
        <div>
            <button type="submit">Masuk</button>
        </div>
        <div class="box">
            <p>Belum punya akun? <a href="{{ route('daftar') }}">Daftar</a></p>
        </div> 
    </form>       
</body>
</html>
