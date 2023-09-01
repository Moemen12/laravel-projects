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
        Schema::create('reviews', function (Blueprint $table) {
          
            $table->id();
             // $table->unsignedBigInteger('book_id');
            $table->text('review');
            $table->unsignedBigInteger('rating');
            $table->timestamps();
            //  $table->foreign('book_id')->references('id')->on('books')->onDelete('cascade');
             $table->foreignId('book_id')->constrained()->cascadeOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reviews');
    }
};
