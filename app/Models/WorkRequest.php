<?php

namespace App\Models;

use App\Traits\UuidTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class WorkRequest extends Model
{
    use HasFactory, UuidTrait;
    protected $guarded = [];

    public function WorkType(): BelongsTo {
        return $this->BelongsTo(WorkType::class);
    }

    public function benefit_types(): BelongsToMany
    {
        return $this->belongsToMany(BenefitType::class, 'work_request_benefit_type');
    }
}
