<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Peserta extends Model
{
    protected $fillable = [
        'nama',
        'email',
        'no_hp',
        'alamat',
        'skema_id',
    ];

    public function skema(): BelongsTo
    {
        return $this->belongsTo(
            SkemaSertifikasi::class,
            'skema_id'
        );
    }
}