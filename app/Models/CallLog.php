<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CallLog extends Model
{
    protected $fillable = [
        'date',
        'time',
        'name',
        'phone_number',
        'call_duration',
        'call_type',
        'call_status',
        'employee',
        'notes'
    ];
}
