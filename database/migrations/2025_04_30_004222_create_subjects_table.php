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
        Schema::create('subjects', function (Blueprint $table) {
            $table->id();
            $table->string('code');  // Display code (e.g., 'GE1')
            $table->string('internal_code')->unique();  // Hidden unique identifier (e.g., 'BALCS_11_GE1')
            $table->string('name');
            $table->integer('units');
            $table->enum('semester', ['First', 'Second'])->default('First');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('subjects');
    }
};
