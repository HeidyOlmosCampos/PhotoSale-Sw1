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
        Schema::create('eventosclientes', function (Blueprint $table) {
            $table->id('id_evento_cliente');
            $table->date('fecha');
            $table->unsignedBigInteger('id_cliente');
            $table->unsignedBigInteger('id_evento');

            $table->foreign('id_cliente')->on('clientes')->references('id_cliente')
            ->onDelete('cascade');
            $table->foreign('id_evento')->on('eventos')->references('id_evento')
            ->onDelete('cascade');
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
        Schema::dropIfExists('eventosclientes');
    }
};
