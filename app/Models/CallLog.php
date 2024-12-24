<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
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

    public function scopeCallsThisWeek(Builder $query):void
    {
        $query->whereBetween('created_at',[now()->startOfWeek(),now()->endOfWeek()]);
    }

    public function scopeCallsToday(Builder $query):void
    {
        $query->where('created_at',today());
    }
}
