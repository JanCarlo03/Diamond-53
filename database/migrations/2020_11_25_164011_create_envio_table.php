<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEnvioTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('envio', function (Blueprint $table) {
            $table->bigIncrements('id_envio');
            $table->Integer('id_venta');
            $table->String('fecha', 30);
            $table->String('estado_id', 30);
            $table->String('municipio_id',30);
            $table->String('calle',50);
            $table->Integer('codigo_postal');
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
        Schema::dropIfExists('envio');
    }
}
