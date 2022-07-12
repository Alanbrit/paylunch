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
        Schema::create('listas', function (Blueprint $table) {
            $table->id();
            $table->date('fecha')->nullable();
            $table->enum('status',["presente", "ausente"]);
            $table->unsignedBigInteger('id_alumno')->nullable();
            $table->foreign('id_alumno')->references('id')->on('users')->nullable();
            $table->unsignedBigInteger('id_escuela')->nullable();
            $table->foreign('id_escuela')->references('id')->on('schools')->nullable();
            $table->unsignedBigInteger('id_grupo')->nullable();
            $table->foreign('id_grupo')->references('id')->on('grupos')->nullable();
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
        Schema::dropIfExists('listas');
    }
};
