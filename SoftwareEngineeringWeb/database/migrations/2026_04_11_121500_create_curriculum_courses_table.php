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
        Schema::create('curriculum_courses', function (Blueprint $table) {
            $table->id();
            $table->string('year_label');
            $table->unsignedSmallInteger('year_order')->default(0);
            $table->string('semester_label');
            $table->unsignedSmallInteger('semester_order')->default(0);
            $table->string('course_name');
            $table->unsignedSmallInteger('course_order')->default(0);
            $table->unsignedSmallInteger('credits')->nullable();
            $table->string('component_category')->default('university')->index();
            $table->timestamps();

            $table->index(['year_order', 'semester_order', 'course_order'], 'curriculum_courses_order_index');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('curriculum_courses');
    }
};
