<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class client extends Model
{
    protected $table = "client";
	
	// Digunakan untuk menggunakan soft delete secara default saat menghapus data
   // use SoftDeletes;
 
    protected $fillable = [
        'clientid', 'client_name','address','phn','email','mou_date'
    ];
			
	protected $primaryKey = 'clientid';
	public $incrementing = false;
	
	 // protected $fillable = ['*'];
}
