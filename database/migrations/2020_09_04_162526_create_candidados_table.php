<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCandidadosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('candidados', function (Blueprint $table) {
            $table->id();
            $table->string('nome');
            $table->date('data_nascimento');
            $table->integer('telefone')->nullable();
            $table->string('local_trabalho')->nullable();
            $table->string('estado_civil')->nullable();
            $table->string('casapropria')->nullable();
            $table->string('naturaldade')->nullable();
            $table->string('credito_requesitado')->nullable();
            $table->string('salario')->nullable();
            $table->unsignedBigInteger('gestor_id');
            $table->foreign('gestor_id')->references('id')->on('gestors')->onDelete('cascade');
//            $table->unsignedBigInteger('user_id');
//            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
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
        Schema::dropIfExists('candidados');
    }
}
