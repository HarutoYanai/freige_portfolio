<?php
//reviewsテーブルのモデルクラス
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    use HasFactory;

    //userに対するリレーション
    public function user()
    {
        return $this->belongTo(User::class);
    }
}
