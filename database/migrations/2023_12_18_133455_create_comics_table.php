<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateComicsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comics', function (Blueprint $table) {
            $table->id(); // Colonna ID auto-incrementante
            $table->string('title');
            $table->text('description');
            $table->string('thumb');
            $table->decimal('price', 8, 2);
            $table->string('series');
            $table->date('sale_date');
            $table->string('type');
            $table->timestamps(); // Colonne di creazione e aggiornamento automatico
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('comics');
    }
}