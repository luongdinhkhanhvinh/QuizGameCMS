<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LichSuMuaCredit extends Model
{
    protected $table='lichsumuacredit';
     public function nguoiChoi()
    {
    	return $this->belongsTo('App\NguoiChoi');
    }
     public function goiCredit()
    {
    	return $this->belongsTo('App\GoiCredit');
    }
}
