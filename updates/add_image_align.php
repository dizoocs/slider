<?php namespace Dizoo\Slider\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class AddImageAlign extends Migration
{
    public function up()
    {
        Schema::table('dizoo_slider_slides', function($table)
        {
            $table->string('image_align', 6)->default('center');
        });
    }

    public function down()
    {
        Schema::table('dizoo_slider_slides', function($table)
        {
            $table->dropColumn('image_align');
        });
    }
}
