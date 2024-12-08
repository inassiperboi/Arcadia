<!DOCTYPE html>
<html>
<head>
    <title>Proses Peminjaman Buku</title>
    <link rel="stylesheet" href="{{ asset('proses.css') }}">
</head>
<body>
    <h1>Proses Peminjaman Buku</h1>

    <h2>Informasi Peminjaman</h2>
    <p><strong>Kode Pinjam:</strong> {{ $kode_pinjam }}</p>
    <p><strong>Alamat Pinjam:</strong> {{ $alamat_pinjam }}</p>
    <p><strong>Tanggal Pesan:</strong> {{ $tgl_pesan }}</p>
    <p><strong>Tanggal Ambil:</strong> {{ $tgl_ambil }}</p>
    <p><strong>Tanggal Wajib Kembali:</strong> {{ $tgl_wajib_kembali }}</p>

    <h2>Detail Buku yang Akan Dipinjam</h2>
    <ul>
        @foreach ($selected_books as $bookId)
            <li>{{ $bookId }}</li>
        @endforeach
    </ul>

    <form method="POST" action="{{ url('/invoice') }}">
        @csrf
        <input type="hidden" name="kode_pinjam" value="{{ $kode_pinjam }}">
        <input type="hidden" name="alamat_pinjam" value="{{ $alamat_pinjam }}">
        <input type="hidden" name="tgl_pesan" value="{{ $tgl_pesan }}">
        <input type="hidden" name="tgl_ambil" value="{{ $tgl_ambil }}">
        <input type="hidden" name="tgl_wajib_kembali" value="{{ $tgl_wajib_kembali }}">
        @foreach ($selected_books as $bookId)
            <input type="hidden" name="books[]" value="{{ $bookId }}">
        @endforeach
        <button type="submit">Pinjam</button>
    </form>
</body>
</html>
