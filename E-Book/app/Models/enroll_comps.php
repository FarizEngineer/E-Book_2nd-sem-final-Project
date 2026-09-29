<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class enroll_comps extends Model
{
    protected $fillable = [
        'user_id',
        'competition_id',
        'text',
        'enrolled_at',
        'submitted_at',
        'status',
        'pdf',
    ];

    protected $casts = [
        'enrolled_at' => 'datetime',
        'submitted_at' => 'datetime',
    ];

    public function competition()
    {
        return $this->belongsTo(
            competition::class,
            'competition_id'
        );
    }

    public function user()
    {
        return $this->belongsTo(
            User::class,
            'user_id'
        );
    }
}
