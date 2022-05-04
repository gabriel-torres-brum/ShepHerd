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
        Schema::create('ad_pessoas_documentos', function (Blueprint $table) {
            $table->id();
            $table->string('numero');
            $table->unsignedBigInteger('pessoa_id');
            $table->unsignedBigInteger('documento_id');

            $table->foreign('pessoa_id')->references('id')->on('ad_pessoas');
            $table->foreign('documento_id')->references('id')->on('ad_documentos');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ad_pessoas_documentos');
    }
};
