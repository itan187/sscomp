<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateQuotationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('quotations', function (Blueprint $table) {
            $table->increments('id');
            $table->string('folio'); 
            $table->string('cliente', 40); 
            $table->string('email', 40); 
            $table->string('anticipo', 40);
            $table->string('telefono');
            $table->string('encargado', 40);
            $table->string('nombreArchivo', 40);
            $table->string('archivo');
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
        Schema::dropIfExists('quotations');
    }
}
