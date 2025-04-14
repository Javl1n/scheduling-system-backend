<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasManyThrough;

class Subject extends Model
{
    /** @use HasFactory<\Database\Factories\SubjectFactory> */
    use HasFactory;

    protected $fillable = ["code", "title"];

    public function instructors(): BelongsToMany {
        return $this->belongsToMany(Instructor::class)->using(InstructorSubject::class);
    }
    
    public function schedules(): HasManyThrough {
        return $this->hasManyThrough(Schedule::class, InstructorSubject::class);
    }

    public function years(): HasMany {
        return $this->hasMany(SubjectYear::class);
    }
}
