<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Device extends BaseModel
{
    public function user():BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
