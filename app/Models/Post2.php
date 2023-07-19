<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Post2 extends Model
{
    use HasFactory, SoftDeletes;

    public function category2()
    {
        return $this->belongsTo(Category2::class);
    }
}
