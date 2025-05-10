<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Recipe extends Model
{
    use HasFactory;
    
    //Userに対するリレーション
    public function user() {
        return $this->belongsTo(User::class);
    }
    
    public function scopeLatestLimit($query, $limit_count = 3) {
        //created_atで降順に並べた後、limitで件数制限をかける
        return $query->orderBy('created_at', 'desc')->limit($limit_count);
    }

    /*
    モデルのルートキーの取得
    @return string
    */
    public function getRouteKeyName() {
        return 'recipe_id';
    }

    protected $fillable = [
        'user_id',
        'recipe_id',
        'recipe_title',
        'recipe_url',
        'image_url',
        'recipe_material',
        'rank',
    ];

    protected $casts = [
        'recipe_material' => 'array',
    ];
}
