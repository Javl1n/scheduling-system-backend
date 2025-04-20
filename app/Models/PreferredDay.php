<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class PreferredDay extends Model
{
    protected $fillable = ["day"];

    public function instructor(): BelongsTo {
        return $this->belongsTo(Instructor::class);
    }
}
