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
        Schema::create('name_titles', function (Blueprint $table) {
            $table->id();
            $table->string('name', 100);
            $table->string('short_name', 20)->nullable();
            $table->string('gender_type', 10)->default('unrelated')->comment('one of male, female, unrelated');
            $table->boolean('is_active')->default(true);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('name_titles');
    }
};
