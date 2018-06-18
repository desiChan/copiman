<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateJnsticketTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
		
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
          
		   Schema::drop('jnsticket');
    }
}
