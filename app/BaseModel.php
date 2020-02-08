<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

//此类用于给其他模型做父类
abstract class BaseModel extends Model
{
    /**
     * 所有字段都可以被赋值
     * @var array
     */
    protected $guarded = [];

    public const STATUS_ON = 1;
    public const STATUS_OFF = -1;

    public function scopeOn($query)
    {
        return $query->where('status',self::STATUS_ON);
    }

    public function scopeOff($query)
    {
        return $query->where('status',self::STATUS_OFF);
    }

    public function getTimeAgoAttribute()
    {
        $locale = 'zh';
        $time = $this->created_at instanceof Carbon ? $this->created_at : Carbon::parse($this->created_at);
        Carbon::setLocale($locale);
        return $time->diffForHumans();
    }
}
