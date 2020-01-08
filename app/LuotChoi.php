<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LuotChoi extends Model
{
    protected $table='luotchoi';
     public function nguoiChoi()
    {
    	return $this->belongsTo('App\NguoiChoi');
    }
     public function chiTietLuotChoi()
    {
    	return $this->hasMany('App\ChiTietLuotChoi');
    }
}
