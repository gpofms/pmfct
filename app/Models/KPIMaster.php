<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class KPIMaster extends Model
{
    use HasFactory;
    protected $table = 'pmfct.kpi_master';

    protected  $fillable = [
        'agency_id',
        'event_id',
        'kpi_name',
        'description',
        'equation',
        'created_by',
        'created_at',
        'updated_by',
        'updated_at',
    ];

    public function agency() {
        return $this->belongsTo(AgencyMaster::class,'agency_id');
    }

    public function event() {
        return $this->belongsTo(EventMaster::class,'event_id');
    }
}
