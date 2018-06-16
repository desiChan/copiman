<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class mmenu extends Model
{
    protected $table = "mmenu";
	
	// Digunakan untuk menggunakan soft delete secara default saat menghapus data
   // use SoftDeletes;
 
    protected $fillable = [
        'menuid', 'menu_name'
    ];
	protected $primaryKey = 'menuid';
	public $incrementing = false;
	
	 // protected $fillable = ['*'];
}
