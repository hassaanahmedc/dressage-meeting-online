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
        Schema::create('contact_us', function (Blueprint $table) {
            $table->id();
            $table->string('full_name');
            $table->string('organization')->nullable();
            $table->string('email');
            $table->string('phone', 15);
            $table->string('city')->nullable();
            $table->string('zip_code', 15)->nullable();
            $table->string('country')->nullable();
            $table->string('contact_msg', 800)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('contact_us');
    }
};
