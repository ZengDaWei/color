<?php

namespace App;

use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\MorphTo;

class Comment extends BaseModel
{
    public function commented():MorphTo
    {
        return $this->morphTo();
    }

    public function user():BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function comment():BelongsTo
    {
        return $this->belongsTo(Comment::class);
    }

    public function comments():HasMany
    {
        return $this->hasMany(Comment::class)->with('user');
    }
}
