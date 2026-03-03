<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Passkey extends Model
{
    protected $table = 'stats_passkeys';

    protected $primaryKey = 'id';

    protected $fillable = [
        'code',
        'name',
        'email',
        'is_active',
        'last_used_at',
        'use_count',
    ];

    protected $casts = [
        'last_used_at' => 'datetime',
    ];
}
