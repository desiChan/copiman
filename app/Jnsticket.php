<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class jnsticket extends Model
{
    protected $table = "jns_ticket";
	
	// Digunakan untuk menggunakan soft delete secara default saat menghapus data
   // use SoftDeletes;
 
    protected $fillable = [
        'jns_ticket', 'keterangan','otorisasi'
    ];
	protected $primaryKey = 'jns_ticket';
	public $incrementing = false;
	
	 // protected $fillable = ['*'];
}
