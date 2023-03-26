<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Provider extends Model
{
    use HasFactory;

    protected $table = 'providers';

    protected $fillable = [
        'id',
        'name',
        'phone',
        'national_id',
        'photo',
        'state',
        'start_time',
        'end_time',
        'service_id',
        'created_at',
        'updated_at',
    ];

}
