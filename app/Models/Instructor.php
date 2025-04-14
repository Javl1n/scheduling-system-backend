<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasManyThrough;

class Instructor extends Model
{
    /** @use HasFactory<\Database\Factories\InstructorFactory> */
    use HasFactory;

    public function subjects(): BelongsToMany {
        return $this->belongsToMany(Subject::class)->using(InstructorSubject::class);
    }

    public function preferred_days() {
        return $this->hasMany(PreferredDay::class);
    }

    public function schedules(): HasManyThrough {
        return $this->hasManyThrough(Schedule::class, InstructorSubject::class);
    }
}
