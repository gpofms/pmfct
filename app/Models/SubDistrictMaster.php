<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SubDistrictMaster extends Model
{
    use HasFactory;

    protected $table = 'pmfct.m_sub_district';

    protected  $fillable = [
        'sub_district_code',
        'sub_district_name',
        'hierarchy',
        'census_2001_code',
        'census_2011_code',
        'district_master_id'
    ];
}
