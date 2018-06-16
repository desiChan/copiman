<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class jnsticket extends Model
{
    protected $table = "jnsticket";
	
	// Digunakan untuk menggunakan soft delete secara default saat menghapus data
   // use SoftDeletes;
 
    protected $fillable = [
        'jnsticket', 'keterangan','otorisasi'
    ];
	protected $primaryKey = 'jnsticket';
	public $incrementing = false;
	
	 // protected $fillable = ['*'];
}
