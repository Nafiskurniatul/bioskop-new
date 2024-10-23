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
        Schema::create('movies', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->string('cast')->nullable();
            $table->string('img_url')->nullable();
            $table->text('sinopsis')->nullable();
            $table->text('director')->nullable();
            $table->integer('age')->nullable();
            $table->string('duration')->nullable();
            $table->string('trailer_url')->nullable();
            $table->integer('price')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('movies');
    }
};
