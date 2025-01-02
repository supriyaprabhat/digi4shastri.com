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
        Schema::create('sections', function (Blueprint $table) {
            $table->id();
            $table->foreignId('page_id')->constrained('pages')->onDelete('cascade');
            $table->string('section_name');
            $table->integer('order')->default(0);
            $table->tinyInteger('status')->default(1);
            $table->string('image')->nullable();
            $table->string('image1')->nullable();
            $table->string('image2')->nullable();
            $table->string('heading')->nullable();
            $table->string('sub_heading1')->nullable();
            $table->string('sub_heading2')->nullable();
            $table->string('sub_heading3')->nullable();
            $table->string('sub_heading4')->nullable();
            $table->string('sub_heading5')->nullable();
            $table->json('other1')->nullable();
            $table->json('other2')->nullable();
            $table->text('other3')->nullable();
            $table->text('other4')->nullable();
            $table->text('other5')->nullable();
            $table->string('button_link')->nullable();
            $table->string('button_name')->nullable();
            $table->string('image3')->nullable();
            $table->string('image4')->nullable();
            $table->string('image5')->nullable();
            $table->string('image6')->nullable();
            $table->string('button_link1')->nullable();
            $table->string('button_name1')->nullable();
            $table->string('button_name2')->nullable();
            $table->string('button_link2')->nullable();
            $table->string('button_name3')->nullable();
            $table->string('button_link3')->nullable();
            $table->string('button_name4')->nullable();
            $table->string('button_link4')->nullable();
            $table->string('button_name5')->nullable();
            $table->string('button_link5')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sections');
    }
};
