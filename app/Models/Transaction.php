<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    use HasFactory;
    protected $guarded = ['id'];
    public function posts()
    {
        return $this->belongTo(Post::class);
    }
    public function user()
    {
        return $this->belongTo(User::class,'user_id');
    }
}
