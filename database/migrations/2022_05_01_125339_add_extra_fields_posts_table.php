<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddExtraFieldsPostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('posts', function (Blueprint $table) {
            $table->longtext('body2')->nullable();
            $table->longtext('body3')->nullable();

            $table->string('post_header_image')->nullable();
            $table->string('post_image1')->nullable();
            $table->string('post_image2')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('posts', function (Blueprint $table) {
            $table->dropColumn('body2');
            $table->dropColumn('body3');

            $table->dropColumn('post_header_image');
            $table->dropColumn('post_image1');
            $table->dropColumn('post_image2');
        });
    }
}
