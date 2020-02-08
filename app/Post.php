<?php

namespace App;

use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\MorphMany;
use Illuminate\Database\Eloquent\Relations\MorphOne;

class Post extends BaseModel
{
    public function user():BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function comments():MorphMany
    {
        return $this->morphMany(Comment::class,'commented');
    }

    public function video():MorphOne
    {
        return $this->morphOne(Video::class,'used');
    }

    public function image():MorphOne
    {
        return $this->morphOne(Image::class,'used');
    }

    public function category():BelongsTo
    {
        return $this->belongsTo(Category::class);
    }
}
