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
        Schema::create('people', function (Blueprint $table) {
            $table->id();
            $table->foreignId('name_title_id')->constrained();
            $table->string('first_name', 50);
            $table->string('last_name', 50);
            $table->timestamp('enrolled_at')->nullable();
            $table->timestamp('terminated_at')->nullable();
            $table->boolean('is_terminated')->default(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('people');
    }
};
