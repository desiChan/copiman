<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class mmodul extends Model
{
    protected $table = "modul";
	
	// Digunakan untuk menggunakan soft delete secara default saat menghapus data
   // use SoftDeletes;
 
    protected $fillable = [
        'modulid', 'modul_name'
    ];
	protected $primaryKey = 'modulid';
	public $incrementing = false;
	
	 // protected $fillable = ['*'];
}
