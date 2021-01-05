<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdateProductAddCloudinaryFields extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('products', function (Blueprint $table) {
            //$table->string('color', 10)->change();
            $table->dropColumn('image_path');
            $table->string('public_id')->after('shopee_url');
            $table->string('secure_url')->after('public_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('products', function (Blueprint $table) {
            //$table->string('color', 10)->change();
            $table->string('image_path')->after('shopee_url');
            $table->dropColumn('public_id');
            $table->dropColumn('secure_url');
        });
    }
}
