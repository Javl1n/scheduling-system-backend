<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Block extends Model
{
    /** @use HasFactory<\Database\Factories\BlockFactory> */
    use HasFactory;

    public function students(): HasMany {
        return $this->hasMany(Student::class);
    }

    public function schedules(): HasMany {
        return $this->hasMany(Schedule::class);
    }
}
