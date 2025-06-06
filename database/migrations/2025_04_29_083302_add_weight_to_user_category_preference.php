<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::table('user_category_preferences', function (Blueprint $table) {
            $table->decimal('weight', 10, 2)->default(0);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::table('user_category_preferences', function (Blueprint $table) {
            $table->dropColumn('weight');
        });
    }
};
