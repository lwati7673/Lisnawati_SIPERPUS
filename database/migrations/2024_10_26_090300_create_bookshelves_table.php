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
        Schema::create('bookshelves', function (Blueprint $table) {
                $table->id();
                $table->string('code',10); //varchar diganti dengan string 
                $table->string('name'); //gapake 10 itu default length berarti 255

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bookshelves');
    }
};
