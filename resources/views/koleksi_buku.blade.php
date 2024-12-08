<!DOCTYPE html>
<html>
<head>
    <title>Koleksi Buku</title>
    <link rel="stylesheet" href="{{ asset('koleksi.css') }}">
</head>
<body>
    <h1>Koleksi Buku</h1>
    @if ($buku->isEmpty())
        <p>Tidak ada buku dalam koleksi saat ini.</p>
    @else
        <form id="checkoutForm" action="/prosespeminjaman" method="POST">
            @csrf
            <table>
                <thead>
                    <tr>
                        <th>ID Buku</th>
                        <th>Judul Buku</th>
                        <th>Tanggal Terbit</th>
                        <th>Pengarang</th>
                        <th>Penerbit</th>
                        <th>Action</th> 
                    </tr>
                </thead>
                <tbody>
                    @foreach ($buku as $bukuItem)
                        <tr>
                            <td>{{ $bukuItem->id_buku }}</td>
                            <td>{{ $bukuItem->judul_buku }}</td>
                            <td>{{ $bukuItem->tgl_terbit }}</td>
                            <td>{{ $bukuItem->nama_pengarang }}</td>
                            <td>{{ $bukuItem->nama_penerbit }}</td>
                            <td>
                                <input type="checkbox" class="pinjam-button" name="books[]" value="{{ $bukuItem->id_buku }}">
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            <input type="hidden" name="kode_pinjam" id="kode_pinjam">
            <input type="hidden" name="alamat_pinjam" id="alamat_pinjam">
            <input type="hidden" name="tgl_pesan" id="tgl_pesan">
            <input type="hidden" name="tgl_ambil" id="tgl_ambil">
            <input type="hidden" name="tgl_wajib_kembali" id="tgl_wajib_kembali">
            <button type="submit">Lanjut</button>
        </form>
    @endif

    <script>
        // Function to get URL parameters
        function getUrlParameter(sParam) {
            var sPageURL = window.location.search.substring(1),
                sURLVariables = sPageURL.split('&'),
                sParameterName,
                i;

            for (i = 0; i < sURLVariables.length; i++) {
                sParameterName = sURLVariables[i].split('=');

                if (sParameterName[0] === sParam) {
                    return sParameterName[1] === undefined ? true : decodeURIComponent(sParameterName[1]);
                }
            }
            return false;
        }

        // Populate hidden fields with URL parameters
        document.getElementById('kode_pinjam').value = getUrlParameter('kode_pinjam');
        document.getElementById('alamat_pinjam').value = getUrlParameter('alamat_pinjam');
        document.getElementById('tgl_pesan').value = getUrlParameter('tgl_pesan');
        document.getElementById('tgl_ambil').value = getUrlParameter('tgl_ambil');
        document.getElementById('tgl_wajib_kembali').value = getUrlParameter('tgl_wajib_kembali');
    </script>
</body>
</html>
