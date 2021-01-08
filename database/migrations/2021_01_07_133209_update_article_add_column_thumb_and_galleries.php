<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdateArticleAddColumnThumbAndGalleries extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('articles', function (Blueprint $table) {
            //$table->string('color', 10)->change();
            $table->string('thumb_path')->after('image_path');
            $table->string('gallery_1_path')->after('thumb_path');
            $table->string('gallery_2_path')->after('gallery_1_path');
            $table->string('gallery_3_path')->after('gallery_2_path');
            $table->string('gallery_4_path')->after('gallery_3_path');
            $table->string('gallery_5_path')->after('gallery_4_path');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('articles', function (Blueprint $table) {
            //$table->string('color', 10)->change();
            $table->dropColumn('thumb_path');
            $table->dropColumn('gallery_1_path');
            $table->dropColumn('gallery_2_path');
            $table->dropColumn('gallery_3_path');
            $table->dropColumn('gallery_4_path');
            $table->dropColumn('gallery_5_path');
        });
    }
}
