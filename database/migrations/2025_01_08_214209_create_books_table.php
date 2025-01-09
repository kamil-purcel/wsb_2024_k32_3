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
        Schema::create('books', function (Blueprint $table) {
            $table->id();
            $table->STRING('isbn');
            $table->STRING('title');
            $table->STRING('authors');
            $table->STRING('publisher');
            $table->STRING('published_date');
            $table->STRING('category');
            $table->integer('pages');
            $table->STRING('image');
            $table->STRING('description', 10000);
            
            $table->integer('quantity');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('books');
    }
};
