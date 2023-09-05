<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('livro', function(Blueprint $table){
            $table->id();
            $table->string('isbn')->nullable();
            $table->string('isbn13')->nullable();
            $table->string('titulo');
            $table->string('subtitulo')->nullable();
            $table->string('autor');
            $table->date('publicacao')->nullable();
            $table->text('descricao')->nullable();
            $table->string('capa')->nullable();
            $table->integer('quantidade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
