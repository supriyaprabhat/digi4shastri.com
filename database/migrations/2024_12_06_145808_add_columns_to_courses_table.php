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
            $table->string('thumbnail_image')->nullable()->after('name');
            $table->float('rating')->default(0)->after('thumbnail_image');
            $table->integer('total_enrolled')->default(0)->after('rating');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('courses', function (Blueprint $table) {
            $table->dropColumn('thumbnail_image');
            $table->dropColumn('rating');
            $table->dropColumn('total_enrolled');
        });
    }
};
