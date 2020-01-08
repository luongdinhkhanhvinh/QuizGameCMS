<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class CauHoi extends Model
{
	use SoftDeletes;
    protected $table='cauhoi';
     public function linhVuc()
    {
    	return $this->belongsTo('App\LinhVuc');
    }
    public function chitietluotchoi()
    {
    	return $this->hasMany('App\ChiTietLuotChoi');
    }
}

