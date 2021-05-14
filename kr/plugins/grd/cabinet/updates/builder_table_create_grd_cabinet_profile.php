<?php namespace Grd\Cabinet\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateGrdCabinetProfile extends Migration
{
    public function up()
    {
        Schema::create('grd_cabinet_profile', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->string('name', 20);
            $table->string('description', 100)->nullable();
            $table->string('email', 50)->nullable();
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('grd_cabinet_profile');
    }
}
