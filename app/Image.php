<?php

namespace App;

use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\MorphTo;

class Image extends BaseModel
{
    public function user():BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function used():MorphTo
    {
        return $this->morphTo();
    }
}
