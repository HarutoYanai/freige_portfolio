<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    use HasFactory;

    //userに対するリレーション
    public function user() {
        return $this->belongTo(User::class);
    }

    public function scopeLatestLimit($query, $limit_count = 5) {
        //created_atで降順に並べた後、limitで件数制限をかける
        return $query->orderBy('created_at', 'DESC')->limit($limit_count);
    }
}
