<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdateDashboardSliderAddOrderColumn extends Migration
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
            $table->tinyInteger('order')->after('is_active');
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
            $table->dropColumn('order');
        });
    }
}
