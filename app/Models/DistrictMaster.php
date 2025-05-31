<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\SubDistrictMaster;

class DistrictMaster extends Model
{
    use HasFactory;
    protected $table = 'pmfct.m_district';

    protected  $fillable = [
        'district_code',
        'district_name',
        'hierarchy',
        'short_name',
        'census_2001_code',
        'census_2011_code',
    ];

    public function subDistrict() {
        return $this->hasMany(SubDistrictMaster::class,'district_master_id');
    }
}
