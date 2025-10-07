<?php
// recipe_Historiesテーブルのモデルクラス
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RecipeHistory extends Model
{
    use HasFactory;

    //Userに対するリレーション
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    protected $fillable = [
        'user_id',
        'recipe_id',
        'recipe_title',
        'image_url',
    ];
}
