<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\PMFCTEvents;
use App\Models\SubEvent;


class EventMaster extends Model
{
    use HasFactory;

    protected $table = 'pmfct.event_master';

    protected  $fillable = [
        'name',
        'agency_id',
    ];

    public function transactions() {
        return $this->hasMany(PMFCTEvents::class,'event_type_id');
    }

    public function subEvent() {
        return $this->hasMany(SubEvent::class,'event_master_id');
    }
}
