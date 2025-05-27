<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ActivitySuccess extends Model
{
    use HasFactory;

    protected $table = 'activity.activity_t';

    protected  $fillable = ['activity_id', 'user_id', 'activity_time','ip_address','remark'];
}
