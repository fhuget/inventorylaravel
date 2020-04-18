<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Barang extends Model
{
    public $table = 'barang';
    protected $primaryKey = 'id_barang';
    protected $fillable = [
        'ruangan_id', 
        'nama_barang', 
        'total', 
        'broken', 
        'created_by', 
        'updated_by'
    ];

    public function ruangan(){
    	return $this->belongsTo('App\Ruangan', 'id_ruangan');
    }

    public function user_create(){
    	return $this->belongsTo('App\User', 'created_by', 'id');
    }

    public function user_update(){
    	return $this->belongsTo('App\User', 'updated_by', 'id');
    }

}
