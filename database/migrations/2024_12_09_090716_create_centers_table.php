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
        Schema::create('centers', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->integer('students_trained')->nullable();
            $table->integer('students_placed')->nullable();
            $table->integer('expert_mentors')->nullable();
            $table->integer('years_in_industry')->nullable();
            $table->string('cta_link_1')->nullable();
            $table->string('cta_name_1')->nullable();
            $table->string('heading')->nullable();
            $table->text('sub_heading1')->nullable();
            $table->text('paragraph1')->nullable();
            $table->string('cta_link_2')->nullable();
            $table->string('cta_name_2')->nullable();
            $table->string('cta_link_3')->nullable();
            $table->string('cta_name_3')->nullable();
            $table->text('sub_heading2')->nullable();
            $table->text('sub_heading3')->nullable();
            $table->text('paragraph2')->nullable();
            $table->string('image1')->nullable();
            $table->string('cta_link_4')->nullable();
            $table->string('cta_name_4')->nullable();
            $table->text('sub_heading4')->nullable();
            $table->text('paragraph3')->nullable();
            $table->text('sub_heading5')->nullable();
            $table->text('paragraph4')->nullable();
            $table->json('repeater1')->nullable();
            $table->json('repeater2')->nullable();
            $table->string('cta_link_5')->nullable();
            $table->string('cta_name_5')->nullable();
            $table->string('cta_link_6')->nullable();
            $table->string('cta_name_6')->nullable();
            $table->json('faq')->nullable();
            $table->tinyInteger('status')->default(1);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('centers');
    }
};
