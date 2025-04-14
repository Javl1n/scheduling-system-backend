<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Student extends Model
{
    /** @use HasFactory<\Database\Factories\StudentFactory> */
    use HasFactory;

    public function course(): BelongsTo {
        return $this->belongsTo(Course::class);
    }

    public function block(): BelongsTo {
        return $this->belongsTo(Block::class);
    }

    public function irregular_subjects(): BelongsToMany {
        return $this->belongsToMany(Subject::class)->using(IrregularSubject::class);
    }

    public function irregular_schedule(): BelongsToMany {
        return $this->belongsToMany(Schedule::class)->using(IrregularSchedule::class);
    }
}
