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
        Schema::create('employees', function (Blueprint $table) {
            $table->id();
            $table->string('title', 100);
            $table->string('first_name');
            $table->string('last_name');
            $table->timestamp('birth_date')->nullable();
            $table->timestamp('join_date');
            $table->timestamp('quit_date')->nullable();
            $table->smallInteger('status')->unsigned()->defaut(1)->comment('1:active, 2:resigned, 3:terminated');
            $table->foreignId('user_id')->constrained();
            $table->foreignId('job_position_id')->constrained();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('employees');
    }
};
