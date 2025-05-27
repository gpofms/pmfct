<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PMFCTEvents extends Model
{
    use HasFactory;
    protected $table = 'pmfct.pmfct_events';

    protected  $fillable = [
        'aadhar_ref_id',
        'aadhar',
        'aadhar_eid',
        'event_type_id',
        'sub_event_type_id',
        'event_transaction_id',
        'event_transaction_date',
        'agency_id',
        'agency_name',
        'rural_urban',
        'district_code',
        'sub_district',
        'corp_muni_town',
        'ward_village',
        'event_date',
        'event_meta_json',
        'created_by',
        'created_at',
        'updated_by',
        'updated_at',
    ];
}
