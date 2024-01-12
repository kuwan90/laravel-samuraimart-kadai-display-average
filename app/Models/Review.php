<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    use HasFactory;

    // 1つのレビューは、1人のユーザーに属する
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    // 1つのレビューは、1つの商品に属する
    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}
