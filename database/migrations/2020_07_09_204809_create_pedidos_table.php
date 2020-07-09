<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePedidosTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pedidos', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('Numero');
            $table->string('Hora');
            $table->string('Fecha');
            $table->string('Calle');
            $table->string('Estado');
            $table->string('Factura');
            $table->string('Nombre_Cliente');
            $table->integer('Telefono_Cliente');
            $table->string('Tipo_entrega');
            $table->string('Detalle');
            $table->integer('Total');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('pedidos');
    }
}
