<?php

namespace App\Models;

use Illuminate\Auth\Authenticatable;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Partenaire extends Model implements AuthenticatableContract
{
    use Authenticatable;

    protected $fillable = [
        'partenaire_sector_id',
        'company',
        'contact_name',
        'email',
        'password',
        'phone',
        'level',
        'logo_path',
        'message',
        'is_published',
        'sort_order',
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    protected function casts(): array
    {
        return [
            'is_published' => 'boolean',
            'password' => 'hashed',
        ];
    }

    public function sector(): BelongsTo
    {
        return $this->belongsTo(PartenaireSector::class, 'partenaire_sector_id');
    }
}
