<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class project extends Model
{
    protected $table = "project";
	
    protected $fillable = [
        'projectid', 'project_name'
    ];
	protected $primaryKey = 'projectid';
	public $incrementing = false;
}
