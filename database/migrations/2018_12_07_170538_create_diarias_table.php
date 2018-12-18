<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDiariasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('diaria', function (Blueprint $table) {
         $table->increments('id');
            $table->date('data');
            $table->string('cidade', 200)->nullable();
            $table->string('contrato', 200)->nullable();
            $table->string('cliente', 200)->nullable();
            $table->string('endereco')->nullable();
            $table->string('tp_serv', 200)->nullable();
            $table->string('baixa', 200)->nullable();
            $table->string('os', 200)->nullable();
            $table->string('periodo', 200)->nullable();
            $table->string('tecnico', 200)->nullable();
            $table->string('obs')->nullable();
            $table->string('serial1', 200)->nullable();
            $table->string('serial2', 200)->nullable();
            $table->string('serial3', 200)->nullable();
            $table->string('serial4', 200)->nullable();
            $table->string('serial5', 200)->nullable();
            $table->string('serial6', 200)->nullable();

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
        Schema::dropIfExists('diaria');
    }
}
