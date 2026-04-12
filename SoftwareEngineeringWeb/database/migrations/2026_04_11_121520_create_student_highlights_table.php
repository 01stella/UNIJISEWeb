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
        Schema::create('student_highlights', function (Blueprint $table) {
            $table->id();
            $table->string('tab_key')->index();
            $table->string('title');
            $table->string('badge')->nullable();
            $table->text('description')->nullable();
            $table->string('image_url')->nullable();
            $table->string('meta_label')->nullable();
            $table->string('secondary_meta')->nullable();
            $table->unsignedTinyInteger('page_number')->nullable();
            $table->unsignedSmallInteger('display_order')->default(0);
            $table->timestamps();

            $table->index(['tab_key', 'page_number', 'display_order'], 'student_highlights_tab_page_order_index');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('student_highlights');
    }
};
