<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\EventMaster;

class AgencyMaster extends Model
{
    use HasFactory;
    protected $table = 'pmfct.agency_master';

    protected  $fillable = [
        'name',
        'active',
        'created_by',
        'created_at',
        'updated_by',
        'updated_at',
    ];

    public function events() {
        return $this->hasMany(EventMaster::class,'agency_id');
    }
}
