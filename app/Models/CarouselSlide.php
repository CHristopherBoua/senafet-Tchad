<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CarouselSlide extends Model
{
    protected $fillable = [
        'title',
        'subtitle',
        'type',
        'image_path',
        'video_url',
        'video_path',
        'link_url',
        'sort_order',
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

    public function scopeOrdered($query)
    {
        return $query->orderBy('sort_order')->orderBy('id');
    }

    /**
     * Retourne le type MIME de la vidéo à partir du chemin ou de l'URL (pour la balise <source>).
     *
     * @return string
     */
    public function videoMimeType(): string
    {
        $path = $this->video_path ?? $this->video_url ?? '';
        $ext = strtolower(pathinfo(parse_url($path, PHP_URL_PATH) ?: $path, PATHINFO_EXTENSION));

        return match ($ext) {
            'webm' => 'video/webm',
            'mov', 'qt' => 'video/quicktime',
            'ogv' => 'video/ogg',
            default => 'video/mp4',
        };
    }
}
