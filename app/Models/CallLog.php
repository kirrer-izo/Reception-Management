<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class CallLog extends Model
{
    use SoftDeletes;
    protected $fillable = [
        'date',
        'time',
        'name',
        'phone_number',
        'call_duration',
        'call_type',
        'call_status',
        'employee_id',
        'notes'
    ];

    public function employee()
    {
        return $this->belongsTo(Employee::class);
    }

    public function scopeCallsThisWeek(Builder $query):void
    {
        $query->whereBetween('created_at',[now()->startOfWeek(),now()->endOfWeek()]);
    }

    public function scopeCallsToday(Builder $query):void
    {
        $query->where('created_at',today());
    }
}
