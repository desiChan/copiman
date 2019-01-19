<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class acel extends Model
{
    protected $table = "log";
	
    protected $fillable = [
        'logid', 'field' , 'function' , 'modulid' , 'prosedure' , 'mou_date' , 'keterangan'
    ];
	protected $primaryKey = 'logid';
	public $incrementing = false;
}
