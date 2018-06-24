<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTicketsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ticket', function (Blueprint $table) {
            $table->string('ticketid',10);
            $table->string('projectid',10);
            $table->date('dateline_client');
            $table->text('keterangan');
            $table->integer('rate');
            $table->string('modulid',5);
            $table->string('user_handle',10);
            $table->string('jnsticket',5);
            $table->string('user_create',10);
            $table->date('dupd');
            $table->string('user_approve',10);
            $table->date('dotr');
            $table->string('status_ticket',1);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('ticket');
    }
}
