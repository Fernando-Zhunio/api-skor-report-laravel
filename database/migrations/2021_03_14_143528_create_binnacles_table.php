<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBinnaclesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('binnacles', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('turno');
            $table->date('fecha_inicio');
            $table->date('fecha_fin');
            $table->string('ref_ticket');
            $table->string('via');
            $table->integer('state');
            $table->string('reportado');
            $table->string('soport_nivel');
            $table->string('tec_spec');
            $table->foreignId('report_id');
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
        Schema::dropIfExists('binnacles');
    }
}
