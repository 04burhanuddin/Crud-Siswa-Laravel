<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('siswas', function (Blueprint $table) {
            $table->increments('no_pendaftaran')->autoIncrement();
            $table->string('nama');
            $table->string('alamat');
            $table->date('tanggal_lahir');
            $table->enum('jenis_kelamin', ['Perempuan', 'Laki-Laki']);
            $table->string('asal_sekolah');
            $table->foreignId('agama_id')->references('id')->on('agamas');
            $table->decimal('nilai_ind');
            $table->decimal('nilai_ipa');
            $table->decimal('nilai_mtk');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('siswas');
    }
};