<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class PartenaireSector extends Model
{
    protected $fillable = ['name', 'slug', 'sort_order'];

    public function partenaires(): HasMany
    {
        return $this->hasMany(Partenaire::class, 'partenaire_sector_id');
    }
}
