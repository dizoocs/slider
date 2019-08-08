<?php namespace Dizoo\Slider\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class AddFontSize extends Migration
{
    public function up()
    {
        Schema::table('dizoo_slider_slides', function($table)
        {
            $table->integer('title_size')->default(50);
            $table->integer('subtitle_size')->default(28);
        });
    }

    public function down()
    {
        Schema::table('dizoo_slider_slides', function($table)
        {
            $table->dropColumn('title_size');
            $table->dropColumn('subtitle_size');
        });
    }
}
