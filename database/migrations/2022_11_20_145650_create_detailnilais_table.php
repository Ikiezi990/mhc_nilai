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
        Schema::create('detailnilais', function (Blueprint $table) {
            $table->id();
            $table->integer('nilai_id');
            $table->integer('mapel_id');
            $table->integer('nilai_keterampilan');
            $table->integer('nilai_pengetahuan');
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
        Schema::dropIfExists('detailnilais');
    }
};
