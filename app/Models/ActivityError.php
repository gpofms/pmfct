<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ActivityError extends Model
{
    use HasFactory;

    protected $table = 'activity.errorlog_t';

    protected $primaryKey = 'id';

    public $timestamps = false;

    protected  $fillable = ['url', 'error_msg'];
}
