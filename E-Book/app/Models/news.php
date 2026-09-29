<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class news extends Model
{
      protected $fillable = [
     'title',
     'news',
     'image',
     'dealine',
     'tag',
     'user_id'
    ];

public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

}
