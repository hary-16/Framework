<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class Matakuliah extends Model
{
    protected $table ='matakuliah'; //utk menghubungkan ke tabel
	protected $primaryKey='id';
	protected $fillable = ['id','matakuliah']; 
}
