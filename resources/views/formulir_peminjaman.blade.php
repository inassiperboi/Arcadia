<!DOCTYPE html>
<html>
<head>
    <title>Formulir Peminjaman Perpustakaan Arcadia</title>
    <link rel="stylesheet" href="{{ asset('formulir.css') }}">
</head>
<body>
    <h1>Formulir Peminjaman Perpustakaan Arcadia</h1>
    <form method="GET" action="{{ route('koleksi_buku') }}">
        @csrf

        <label for="kode_pinjam">Nama Peminjam:</label>
        <input type="text" id="kode_pinjam" name="kode_pinjam" required><br>

        <label for="alamat_pinjam">Alamat:</label>
        <input type="text" id="alamat_pinjam" name="alamat_pinjam" required><br>

        <label for="tgl_pesan">Tanggal Pesan:</label>
        <input type="date" id="tgl_pesan" name="tgl_pesan" required><br>

        <label for="tgl_ambil">Tanggal Ambil:</label>
        <input type="date" id="tgl_ambil" name="tgl_ambil"><br>

        <label for="tgl_wajib_kembali">Tanggal Wajib Kembali:</label>
        <input type="date" id="tgl_wajib_kembali" name="tgl_wajib_kembali" required><br>

        <button type="submit">Lanjut Memilih buku</button>
    </form>
</body>
</html>
