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
        Schema::create('consultances', function (Blueprint $table) {
            $table->id();
            $table->foreignId('career_id')->constrained()->restrictOnDelete();
            $table->string('title')->unique();
            $table->string('imageName');
            $table->text('description');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('consultances');
    }
};
