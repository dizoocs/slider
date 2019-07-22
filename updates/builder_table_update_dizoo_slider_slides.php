<?php namespace Dizoo\Slider\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateDizooSliderSlides extends Migration
{
    public function up()
    {
        Schema::table('dizoo_slider_slides', function($table)
        {
            $table->string('button_1_url', 255)->nullable();
            $table->string('button_2_url', 255)->nullable();
            $table->string('subtitle', 40)->nullable()->change();
            $table->string('description', 210)->nullable()->change();
            $table->boolean('button_1_active')->nullable()->change();
            $table->string('button_1_text', 15)->nullable()->change();
            $table->string('button_1_color', 7)->nullable()->default('#ffffff')->change();
            $table->boolean('button_2_active')->default(0)->change();
            $table->string('button_2_text', 15)->nullable()->change();
        });
    }
    
    public function down()
    {
        Schema::table('dizoo_slider_slides', function($table)
        {
            $table->dropColumn('button_1_url');
            $table->dropColumn('button_2_url');
            $table->string('subtitle', 40)->nullable(false)->change();
            $table->string('description', 210)->nullable(false)->change();
            $table->boolean('button_1_active')->nullable(false)->change();
            $table->string('button_1_text', 15)->nullable(false)->change();
            $table->string('button_1_color', 7)->nullable(false)->default(null)->change();
            $table->boolean('button_2_active')->default(null)->change();
            $table->string('button_2_text', 15)->nullable(false)->change();
        });
    }
}
