<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class Dosen extends Model
{
    protected $table = 'dosen';
	protected $primaryKey = 'nip';
	static $rules = [
		'nip' => 'required',
		'nama' => 'required',
		'alamat' => 'required',
		'tgl_lahir' => 'required',
		'jk' => 'required',
		'agama' => 'required',
		'golongan' => 'required',
		'email' => 'required',
    ]; 
    protected $perPage = 20; 
	public function ag($kode){
		if ($kode==1) return "Islam";
		else if ($kode==2) return "Protestan";
		else if ($kode==3) return "Katholik";
		else if ($kode==4) return "Hindu";
		else if ($kode==5) return "Budha";
		else return "Lainnya";

 }

    /**
	* Attributes that should be mass-assignable.
	*
	* @var array
	*/
	protected $fillable = ['nip','nama','alamat','tgl_lahir','jk','agama','golongan','email']; 
}
