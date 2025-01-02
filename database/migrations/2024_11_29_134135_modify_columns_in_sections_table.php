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
        Schema::table('sections', function (Blueprint $table) {
            $table->text('sub_heading1')->nullable()->change();
            $table->text('sub_heading2')->nullable()->change();
            $table->text('sub_heading3')->nullable()->change();
            $table->text('sub_heading4')->nullable()->change();
            $table->text('sub_heading5')->nullable()->change();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('sections', function (Blueprint $table) {
            $table->string('sub_heading1')->nullable()->change();
            $table->string('sub_heading2')->nullable()->change();
            $table->string('sub_heading3')->nullable()->change();
            $table->string('sub_heading4')->nullable()->change();
            $table->string('sub_heading5')->nullable()->change();
        });
    }
};
