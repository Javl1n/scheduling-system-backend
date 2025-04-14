<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Schedule extends Model
{
    /** @use HasFactory<\Database\Factories\ScheduleFactory> */
    use HasFactory;

    public function room(): BelongsTo {
        return $this->belongsTo(Room::class);
    }

    public function block(): BelongsTo {
        return $this->belongsTo(Block::class);
    }

    public function instructor_subject(): BelongsTo {
        return $this->belongsTo(InstructorSubject::class);
    }

    public function irregulars(): BelongsToMany {
        return $this->belongsToMany(Student::class)->using(IrregularSchedule::class);
    }
}
