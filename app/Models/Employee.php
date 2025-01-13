<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\Cache;

class Employee extends Model
{
    use HasFactory, SoftDeletes;
    protected $fillable = [
        'name',
        'phone_number',
        'email'
    ];

    public function review(): HasOne
    {
        return $this->hasOne(Review::class);
    }

    public static function boot()
    {
        parent::boot();

        static::creating(function(Employee $employee){
            Cache::forget('employees');
        });
        static::updating(function(Employee $employee){
            Cache::forget('employees');
        });

    }
}
