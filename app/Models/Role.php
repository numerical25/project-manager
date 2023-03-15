<?php

namespace App\Models;

use App\Traits\UuidTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Role extends Model
{
    use HasFactory, UuidTrait;

    public function abilities(): BelongsToMany
    {
        return $this->belongsToMany(Ability::class, 'role_ability');
    }
}
