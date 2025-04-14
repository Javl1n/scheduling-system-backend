<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class SubjectYear extends Model
{
    protected $fillable = ["year"];

    public function subject(): BelongsTo {
        return $this->belongsTo(Subject::class);
    }
}
