<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class NguoiChoi extends Model
{
    use SoftDeletes;
    protected $table='nguoichoi';

    public function lichSuMuaCredit()
    {
    	return $this->hasMany('App\LichSuMuaCredit');
    }
    public function luotChoi()
    {
    	return $this->hasMany('App\LuotChoi');
    }
}

