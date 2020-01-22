<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePersonsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('persons', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->char('nik', 16)->unique();
            $table->char('kk', 16)->nullable();
            $table->string('nama_lengkap')->nullable();
            $table->string('tempat_lahir')->nullable();
            $table->date('tgl_lahir')->nullable();
            $table->string('status')->nullable();
            $table->string('jenis_kel')->nullable();
            $table->string('agama')->nullable();
            $table->string('kwn')->nullable();
            $table->string('propinsi')->nullable();
            $table->string('kabupaten')->nullable();
            $table->string('kecamatan')->nullable();
            $table->text('alamat')->nullable();
            $table->char('rt', 3)->nullable();
            $table->char('rw', 3)->nullable();
            $table->char('kdpos', 5)->nullable();
            $table->string('skul')->nullable();
            $table->string('kerja')->nullable();
            $table->string('ibu')->nullable();
            $table->string('ayah')->nullable();
            $table->char('tlp', 14)->nullable();
            $table->string('email')->unique();
            $table->string('avatar')->nullable();
            $table->string('pict_home')->nullable();
            $table->string('slug');
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
        Schema::dropIfExists('persons');
    }
}
