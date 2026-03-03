<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class HomeVideoSection extends Model
{
    protected $fillable = [
        'title',
        'subtitle',
        'cta_text',
        'cta_url',
        'video_path',
        'poster_path',
        'is_active',
    ];

    protected function casts(): array
    {
        return [
            'is_active' => 'boolean',
        ];
    }

    public function scopeActive($query)
    {
        return $query->where('is_active', true);
    }

    /**
     * Retourne l'instance unique de la section vidéo (singleton).
     */
    public static function getInstance(): ?self
    {
        return self::query()->first();
    }
}
