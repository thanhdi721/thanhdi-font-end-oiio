<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Province extends Model
{
    use HasFactory;

    protected $table = 'provinces';

    public function districts(){
        return $this->hasMany(District::class, 'province_code', 'code');
    }

    public function wards(){
        return $this->hasManyThrough(Ward::class, District::class, 'province_code', 'district_code', 'code', 'code');
    }
}
