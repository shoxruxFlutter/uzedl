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
        Schema::create('listening', function (Blueprint $table) {
            $table->id();
            $table->integer('category_id');
            $table->integer('lessons_id');
            $table->string('title');
            $table->string('img');
            $table->string('audio');
            $table->string('instructions');
            $table->string('preparation');
            $table->string('transcript');
            $table->string('task1')->nullable();;
            $table->string('task2')->nullable();;
            $table->string('task3')->nullable();;
            $table->string('task4')->nullable();;
            $table->string('task5')->nullable();;
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('listening');
    }
};
