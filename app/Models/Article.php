<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $fillable = ['title', 'content', 'publish_at'];
    protected $dates = ['publish_at'];
    public function setPublishAtAttribute($date)
    {
        $this->attributes['publish_at'] = Carbon::createFromFormat('Y-m-d', $date);
    }

    public function scopePublish($query)
    {
        $query->where('publish_at', '>=', Carbon::now());
    }
}
