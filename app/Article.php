<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
//    这里加了这行才能修改每个值，否则只能用默认值
    protected $fillable = ['title', 'content', 'published_at', 'user_id'];

    protected $dates = ['published_at'];

    public function setPublishedAtAttribute($date)
    {
        $this->attributes['published_at'] = Carbon::createFromFormat('Y-m-d', $date);
    }

    public function scopePublished($query)
    {
        $query->where('published_at', '<=', Carbon::now());
    }

//    一篇文章属于哪个用户
    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
