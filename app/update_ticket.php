<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class update_ticket extends Model
{
    protected $table = "ticket";
	
    protected $fillable = [
        'ticketid', 'projectid' , 'dateline_client' , 'keterangan' , 'rate' , 'modulid' , 'jnsticket' 
    ];
	protected $primaryKey = 'logid';
	public $incrementing = false;
}
