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
        Schema::create('curriculum_credit_components', function (Blueprint $table) {
            $table->id();
            $table->string('component_name');
            $table->unsignedSmallInteger('total_credits');
            $table->unsignedTinyInteger('percentage');
            $table->string('color_key')->default('university');
            $table->unsignedTinyInteger('display_order')->default(0);
            $table->timestamps();

            $table->index(['display_order']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('curriculum_credit_components');
    }
};
