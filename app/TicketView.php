<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ticketView extends Model
{
    protected $table = "ticket_all";
	
    protected $fillable = [
        'ticketid', 'projectid'
    ];
	protected $primaryKey = 'ticketid';
	public $incrementing = false;
}
