<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    public const STATUS_ON = 1;
    public const STATUS_OFF = -1;

    protected $fillable = [
        'name', 'email', 'password','gender','account','phone','jwt','status','password'
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];

    public function scopeOn($query)
    {
        return $query->where('status',self::STATUS_ON);
    }

    public function scopeOff($query)
    {
        return $query->where('status',self::STATUS_OFF);
    }

    public function getTimeAgoAttribute(): string
    {
        $locale = 'zh';
        $time = $this->created_at instanceof Carbon ? $this->created_at : Carbon::parse($this->created_at);
        Carbon::setLocale($locale);
        return $time->diffForHumans();
    }

    public function videos():HasMany
    {
        return $this->hasMany(Video::class);
    }

    public function posts():HasMany
    {
        return $this->hasMany(Post::class);
    }
}
