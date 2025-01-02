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
        Schema::table('courses', function (Blueprint $table) {
            $table->text('short_description')->nullable()->after('rating');
            $table->text('description')->nullable()->after('short_description');
            $table->integer('price_inr')->nullable()->after('description');
            $table->integer('course_total_user')->nullable()->after('price_inr');
            $table->integer('additional_user_inr')->nullable()->after('course_total_user');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('courses', function (Blueprint $table) {
            //
        });
    }
};
