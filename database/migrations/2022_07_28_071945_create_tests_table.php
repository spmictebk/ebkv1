<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTestsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tests', function (Blueprint $table) {
            $table->id();
            $table->unsignedInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->string('sektor_id')->nullable();
            $table->string('unit_id')->nullable();
            $table->string('avatar_id')->nullable();
            $table->integer('ext2_id')->unsigned()->nullable();
            $table->foreign('ext2_id')->references('id')->on('tests')->onDelete('cascade');
            $table->string('ext1_id')->nullable();
            $table->string('tahun')->nullable();
            $table->string('ic')->nullable();
            $table->string('jawatan')->nullable();
            $table->string('gred')->nullable();
            $table->string('pyd')->nullable();
            $table->string('pp1')->nullable();
            $table->string('pp2')->nullable();
            $table->string('bil')->nullable();
            $table->string('bil2')->nullable();
            $table->string('pp_1_nama')->nullable();
            $table->string('pp_2_nama')->nullable();
            $table->string('pp1_nama')->nullable();
            $table->string('pp2_nama')->nullable();
            $table->string('kpp_nama')->nullable();
            $table->string('sasaran')->nullable();
            $table->string('sasaran1')->nullable();
            $table->string('bidang_tugas')->nullable();
            $table->string('bidang_tugas1')->nullable();
            $table->integer('penilaian_1')->nullable();
            $table->string('total_all')->nullable();
            $table->string('status_sasaran')->nullable();
            $table->string('status_sasaran1')->nullable();
            $table->integer('pencapaian_1')->nullable();
            $table->integer('pencapaian_2')->nullable();
            $table->string('jumlah_input')->nullable();
            $table->integer('penilaian_2')->nullable();
            $table->string('catatan')->nullable();
            $table->string('jumlah_input2')->nullable();
            $table->string('total_all2')->nullable();
            $table->string('purata')->nullable();
            $table->string('skor')->nullable();
            $table->string('tahap1')->nullable();
            $table->string('tahap2')->nullable();
            $table->string('purata2')->nullable();
            $table->string('skor2')->nullable();
            $table->string('pp1_semak')->nullable();
            $table->string('pp2_semak')->nullable();
            $table->string('kpp_semak')->nullable();
            $table->string('penyemak1')->nullable();
            $table->string('penyemak2')->nullable();
            $table->string('penyemak3')->nullable();
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
        Schema::dropIfExists('tests');
    }
}
