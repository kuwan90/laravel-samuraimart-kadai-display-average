<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MajorCategory extends Model
{
    use HasFactory;

    // 1つの親カテゴリーは、複数のカテゴリーを持てる
    public function categories()
    {
        return $this->hasMany(Category::class);
    }
}
