<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ChiTietLuotChoi extends Model
{
    protected $table='chitietluotchoi';
     public function cauHoi()
    {
    	return $this->belongsTo('App\CauHoi');
    }
     public function luotchoi()
    {
    	return $this->belongsTo('App\LuotChoi');
    }
}
