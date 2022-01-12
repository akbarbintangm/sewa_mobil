<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMTransmisiMobilsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('m_transmisi_mobils', function (Blueprint $table) {
            $table->bigIncrements('id_m_transmisi_mobil');
            $table->string('name_transmisi_mobil');
            $table->bigInteger('total_transmisi_mobil');
            $table->bigInteger('created_by');
            $table->bigInteger('updated_by');
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
        Schema::dropIfExists('m_transmisi_mobils');
    }
}
