<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCopimanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
		Schema::create('mmenu', function (Blueprint $table) {
			$table->string('menuid',5);
			$table->string('menu_name',100);
			$table->timestamps();
			$table->softDeletes(); 
		});
		
		Schema::create('mmodul', function (Blueprint $table) {
			$table->string('modulid',5);
			$table->string('modul_name',100);
			$table->timestamps();
			$table->softDeletes(); 
		});
		
		Schema::create('jnsticket', function (Blueprint $table) {
			$table->string('jnsticket',5);
			$table->string('keterangan',100);
			$table->string('otorisasi',1);
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
          Schema::drop('mmenu');
		  Schema::drop('mmodul');
		  Schema::drop('mmodul');
    }
}
