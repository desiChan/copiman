<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class logView extends Model
{
    protected $table = "log_all";
	
    protected $fillable = [
        'logid'
    ];
	protected $primaryKey = 'logid';
	public $incrementing = false;
}
