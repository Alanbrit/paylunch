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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->string('apellidos')->nullable();
            $table->string('numero')->nullable();
            $table->string('numero_2')->nullable();
            $table->bigInteger('saldo')->nullable();
            $table->string('email');
            $table->string('password');
            $table->enum('rol',["admin", "tutor"])->default("tutor");
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
        Schema::dropIfExists('users');
    }
};
