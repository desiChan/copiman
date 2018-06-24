<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ticket extends Model
{
    protected $table = "ticket";
	
    protected $fillable = [
        'ticketid', 'projectid'
    ];
	protected $primaryKey = 'ticketid';
	public $incrementing = false;
}
