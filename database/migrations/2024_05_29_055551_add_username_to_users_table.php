<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdatePeminjamTable extends Migration
{
    public function up()
    {
        Schema::table('peminjam', function (Blueprint $table) {
            $table->increments('id_peminjam')->change();
        });
    }

    public function down()
    {
        Schema::table('peminjam', function (Blueprint $table) {
            $table->char('id_peminjam', 5)->change();
        });
    }
}
