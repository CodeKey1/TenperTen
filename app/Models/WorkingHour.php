<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WorkingHour extends Model
{
    use HasFactory;

    protected $table  = 'working_hours';

    protected $fillable = [
        'id',
        'provider_id',
        'day_index',
        'period_list',
        'status',
        'created_at',
        'updated_at',
    ];
}
