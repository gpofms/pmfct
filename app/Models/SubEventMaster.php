<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SubEventMaster extends Model
{
    use HasFactory;

    protected $table = 'pmfct.sub_event_master';

    protected  $fillable = [
        'name',
        'event_master_id',
        'agency_id',
    ];
}
