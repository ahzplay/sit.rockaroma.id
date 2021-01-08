<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdateSliderAddColumnLink extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('dashboard_sliders', function (Blueprint $table) {
            //$table->string('color', 10)->change();
            $table->string('link')->after('secure_url');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('dashboard_sliders', function (Blueprint $table) {
            //$table->string('color', 10)->change();
            $table->dropColumn('link');
        });
    }
}
