<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EventMaster extends Model
{
    use HasFactory;

    protected $table = 'pmfct.event_master';

    protected  $fillable = [
        'name',
        'agency_id',
    ];
}
