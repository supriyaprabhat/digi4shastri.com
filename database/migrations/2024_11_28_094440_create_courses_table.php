<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('courses', function (Blueprint $table) {
            $table->id();
            $table->string('code');
            $table->string('name');
            $table->json('faqs')->nullable();
            $table->string('heading1')->nullable();
            $table->text('p1')->nullable();
            $table->string('duration')->nullable();
            $table->json('cards')->nullable();
            $table->json('curriculum_tab_1')->nullable();
            $table->json('curriculum_tab_2')->nullable();
            $table->json('tools_learn')->nullable();
            $table->string('heading2')->nullable();
            $table->string('heading3')->nullable();
            $table->text('p2')->nullable();
            $table->text('brochure')->nullable();
            $table->json('key_skills')->nullable();
            $table->json('assignments')->nullable();
            $table->json('projects')->nullable();
            $table->json('case_studies')->nullable();
            $table->json('career_supports')->nullable();
            $table->json('bonus_modules')->nullable();
            $table->json('success_stories')->nullable();
            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('courses');
    }
};
