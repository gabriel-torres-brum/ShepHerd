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
            $table->foreignIdFor(\App\Models\ad_Cargo::class);
            $table->string('nome');
            $table->string('data_nascimento');
            $table->string('nome_pai');
            $table->string('nome_mae');
            $table->string('estado_civil');
            $table->string('igreja_origem');
            $table->string('dizimista');
            $table->string('data_batismo')->default(null);
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
        Schema::dropIfExists('ad_pessoas');
    }
};
