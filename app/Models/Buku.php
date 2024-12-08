<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Buku extends Model
{
    // Nama tabel dalam database
    protected $table = 'buku';

    // Nama kolom yang merupakan primary key
    protected $primaryKey = 'id_buku';

    // Karena id_buku bertipe string
    public $incrementing = false;

    // Tipe data primary key
    protected $keyType = 'string';

    // Format tanggal
    protected $dateFormat = 'Y-m-d';

    // Kolom-kolom yang dapat diisi secara massal
    protected $fillable = [
        'id_buku',
        'judul_buku',
        'tgl_terbit',
        'nama_pengarang',
        'nama_penerbit'
    ];

    // Disable timestamps
    public $timestamps = false;
}
