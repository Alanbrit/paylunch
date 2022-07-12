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
        Schema::create('menus', function (Blueprint $table) {
            $table->id();
            $table->string('dia');
            $table->string('guisado');
            $table->string('sopa_guarnicion');
            $table->string('agua');
            $table->string('postre');
            $table->unsignedBigInteger('id_escuela')->nullable();
            $table->foreign('id_escuela')->references('id')->on('schools')->nullable();
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
        Schema::dropIfExists('menus');
    }
};
