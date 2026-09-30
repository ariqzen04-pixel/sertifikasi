<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class SkemaSertifikasi extends Model
{
    protected $fillable = [
        'nama_skema',
        'deskripsi',
    ];

    public function peserta(): HasMany
    {
        return $this->hasMany(
            Peserta::class,
            'skema_id'
        );
    }
}