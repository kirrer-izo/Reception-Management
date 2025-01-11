<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Relations\MorphOne;

class Visitor extends Model
{
    protected $fillable = [
        'date',
        'name',
        'phone_number',
        'email',
        'company',
        'host_name',
        'check_in_time',
        'check_out_time'
    ];

    public function review(): MorphOne
    {
        return $this->morphOne(Review::class,'reviewable');
    }

    public function scopeLatestVisitor(Builder $query):void
    {
        $query->latest();
    }

}
