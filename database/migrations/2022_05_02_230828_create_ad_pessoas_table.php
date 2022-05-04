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
        Schema::create('ad_pessoas', function (Blueprint $table) {
            $table->id();
            $table->string('nome');
            $table->date('data_nascimento');
            $table->string('nome_pai')->default("Não informado");
            $table->string('nome_mae');
            $table->string('igreja_origem')->nullable();
            $table->boolean('batizado')->default(false);
            $table->boolean('dizimista')->default(false);
            $table->date('data_batismo')->nullable();
            $table->unsignedBigInteger('cargo_id');
            $table->unsignedBigInteger('estado_civil_id');
            $table->timestamps();
            
            $table->foreign('cargo_id')->references('id')->on('ad_cargos');
            $table->foreign('estado_civil_id')->references('id')->on('ad_estado_civil');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ad_pessoas');
    }
};
