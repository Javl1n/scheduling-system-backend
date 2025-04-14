<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class PreferredDay extends Model
{
    public function instructor(): BelongsTo {
        return $this->belongsTo(Instructor::class);
    }
}
