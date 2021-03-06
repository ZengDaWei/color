<?php

namespace App;

use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\MorphTo;

class Video extends BaseModel
{
    public function user():BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function used():MorphTo
    {
        return $this->morphTo();
    }

    public function cover():BelongsTo
    {
        return $this->belongsTo(Image::class);
    }
}
