<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

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

}
