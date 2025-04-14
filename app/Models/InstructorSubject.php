<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\Pivot;
use Illuminate\Database\Eloquent\Model;

class InstructorSubject extends Pivot
{
    public $incrementing = true;

    public function schedules(): HasMany {
        return $this->hasMany(Schedule::class);
    }
}
