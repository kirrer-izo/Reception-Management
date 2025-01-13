<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\MorphMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class Review extends Model
{
    use SoftDeletes;
    protected $fillable = [
        'review',
        'rating',
        'reviewable_id',
        'reviewable_type'
    ];

    public function reviewable()
    {
        return $this->morphTo('reviewable');
    }
    // public function employee(): BelongsTo
    // {
    //     return $this->belongsTo(Employee::class);
    // }

    public function comment(): MorphMany
    {
        return $this->morphMany(Comment::class,'commentable');
    }

    public function scopeRating(Builder $query,int $rating):void
    {
        $query->where('rating',$rating);
    }
}
