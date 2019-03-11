<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Hero extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'name', 'real_name', 'super_power','biography'
    ];
}
