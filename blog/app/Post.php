<?php

namespace App;

use App\Comment;
use App\Model;
use Carbon\Carbon;

class Post extends Model
{

    public function addComment($body, $user_id)
    {
        $this->comments()
             ->create(compact('body', 'user_id'));
    }

    public function comments()
    {
        return $this->hasMany(Comment::class);
    }

    public function scopeFilter($query, $filters)
    {
        if (isset($filters['month'])) {
            $query->whereMonth('created_at', Carbon::parse($filters['month'])->month);
        }

        if (isset($filters['year'])) {
            $query->whereYear('created_at', $filters['year']);
        }
    }

    public function tags()
    {
        return $this->belongsToMany(Tag::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public static function archives()
    {
        return static::selectRaw('YEAR(created_at) AS year, MONTHNAME(created_at) AS month, count(*) AS count')
            ->groupBy('year', 'month')
            ->orderByRaw('MIN(created_at) DESC')
            ->get();
    }
    
}
