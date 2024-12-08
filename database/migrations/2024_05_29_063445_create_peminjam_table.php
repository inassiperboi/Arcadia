<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePeminjamanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('peminjaman', function (Blueprint $table) {
            $table->char('kode_pinjam', 5)->primary();
            $table->char('id_admin', 6);
            $table->char('id_peminjam', 5);
            $table->enum('status', ['diproses', 'disetujui', 'ditolak', 'selesai']);
            $table->foreign('id_admin')->references('id_admin')->on('admin')->onDelete('cascade');
            $table->foreign('id_peminjam')->references('id_peminjam')->on('peminjam')->onDelete('cascade');
            $table->date('tgl_pesan');
            $table->date('tgl_ambil')->nullable();
            $table->date('tgl_wajib_kembali');
            $table->date('tgl_kembali')->nullable();
            $table->timestamps(); // Tambahkan created_at dan updated_at
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('peminjaman');
    }
}
