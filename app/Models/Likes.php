<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Likes extends Model
{
    //
    use HasFactory;
    protected $table = 'likes';

    public function post() {
        return $this->belongsTo('App\Posts', 'post_id', 'id');
    }

    public function user() {
        return $this->belongsTo('App\User', 'user_id', 'id');
    }
}
