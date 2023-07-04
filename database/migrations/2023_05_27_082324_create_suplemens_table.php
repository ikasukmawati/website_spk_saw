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
        Schema::create('suplemens', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->integer('harga');
            $table->integer('berat');
            $table->integer('jml_vitamin_a');
            $table->integer('jml_vitamin_b');
            $table->integer('jml_vitamin_c');
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
        Schema::dropIfExists('suplemens');
    }
};
