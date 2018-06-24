<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMmodulTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
		Schema::create('mmodul', function (Blueprint $table) {
			$table->string('modulid',5);
			$table->string('modul_name',100);
			$table->timestamps();
			$table->softDeletes(); 
		});
		
		
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        
		   Schema::drop('mmodul');
		  
    }
}
