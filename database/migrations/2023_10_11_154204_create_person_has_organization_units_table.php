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
        Schema::create('person_has_organization_units', function (Blueprint $table) {
            $table->foreignId('person_id')->constrained();
            $table->foreignId('organization_unit_id')->constrained();
            $table->timestamp('started_at')->nullable();
            $table->timestamp('ended_at')->nullable();
            $table->foreignId('unit_role_id')->default(true);
            $table->timestamps();

            $table->primary(['person_id', 'organization_unit_id']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('person_has_organization_unit');
    }
};
