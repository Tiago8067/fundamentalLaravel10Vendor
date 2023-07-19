<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    use HasFactory;

    public function user()
    {
        return $this->belongsTo(User::class, 'u_id');
    }

    /* public function u()
    {
        return $this->belongsTo(User::class);
    } */
}
