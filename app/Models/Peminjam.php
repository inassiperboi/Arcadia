<?php
namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;

class Peminjam extends Authenticatable
{
    protected $table = 'peminjam';
    protected $primaryKey = 'id_peminjam';
    public $incrementing = false;
    public $timestamps = false;

    protected $fillable = [
        'nama_peminjam',
        'tgl_daftar',
        'user_peminjam',
        'pass_peminjam',
        'status_peminjam',
    ];

    protected $hidden = [
        'pass_peminjam',
    ];

    public function getAuthPassword()
    {
        return $this->pass_peminjam;
    }
}

