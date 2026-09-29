<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class competition extends Model
{
     protected $fillable = [
        'title',
        'topic',
        'type',
        'description',
        'deadline',
        'status',
        'first_prize',
        'second_prize',
        'third_prize',
        'time', // essay-writing duration, in minutes
    ];
 
    protected $casts = [
        'deadline' => 'datetime',
    ];
}
