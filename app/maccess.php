<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class maccess extends Model
{
    protected $table = "maccess";
	
    protected $fillable = [
        'group_menu', 'menuid'
    ];
	protected $primaryKey = ['group_menu','menuid'];
	public $incrementing = false;
}
