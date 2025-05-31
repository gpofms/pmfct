<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PMFCTBasics extends Model
{
    use HasFactory;
    protected $table = 'pmfct.pmfct_basic';

    protected  $fillable = [
        'm_c',
        'aadhar_reference_id',
        'aadhar_eid',
        'gender',
        'dob',
        'mother_aadhar',
        'exception_code',
        'created_by',
        'created_at',
        'updated_by',
        'updated_at',
    ];
}
