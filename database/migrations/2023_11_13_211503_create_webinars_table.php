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
        Schema::create('webinars', function (Blueprint $table) {
            $table->id();
            $table->dateTime('date_and_time');
            $table->string('title');
            $table->text('description');
            $table->string('presenter');
            $table->string('link')->nullable();
            $table->float('price', 8, 2);
            $table->string('banner_image');
            $table->string('presenter_image');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('webinars');
    }
};
