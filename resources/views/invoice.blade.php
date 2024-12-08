<!DOCTYPE html>
<html>
<head>
    <title>Invoice Peminjaman Buku</title>
    <link rel="stylesheet" href="{{ asset('proses.css') }}">
</head>
<body>
    <h1>Invoice Peminjaman Buku</h1>

    <h2>Informasi Peminjaman</h2>
    <p><strong>Kode Pinjam:</strong> {{ $kode_pinjam }}</p>
    <p><strong>Alamat Pinjam:</strong> {{ $alamat_pinjam }}</p>
    <p><strong>Tanggal Pesan:</strong> {{ $tgl_pesan }}</p>
    <p><strong>Tanggal Ambil:</strong> {{ $tgl_ambil }}</p>
    <p><strong>Tanggal Wajib Kembali:</strong> {{ $tgl_wajib_kembali }}</p>
    <p><strong>Status:</strong> Diproses</p>

    <h2>Detail Buku yang Dipinjam</h2>
    <ul>
        @foreach ($selected_books as $bookId)
            <li>{{ $bookId }}</li>
        @endforeach
    </ul>

    <form method="GET" action="{{ url('/home') }}">
        <button type="submit">Kembali</button>
    </form>
</body>
</html>
