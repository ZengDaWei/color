<?php

namespace App;

use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Profile extends BaseModel
{
    public function user():BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
