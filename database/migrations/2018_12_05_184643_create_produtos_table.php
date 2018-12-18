<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProdutosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('produtos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('serial', 200)->nullable();
            $table->string('smart', 200)->nullable();
            $table->string('modelo', 200)->nullable();
            $table->string('categoria', 200)->nullable();
            $table->integer('qtd')->nullable();
            $table->string('nf', 200)->nullable();
            $table->string('status', 200)->nullable();
            $table->date('dataRecebimento');
            $table->string('obs')->nullable();
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
        Schema::dropIfExists('produtos');
    }
}
