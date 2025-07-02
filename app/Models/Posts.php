<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Posts extends Model
{
    //
    use HasFactory;
    protected $table = "posts";

    public function user() {
        return $this->belongsTo('App\Models\User', 'user_id', 'id');
    }

    public function comment() {
        return $this->hasMany('App\Models\Comments', 'post_id', 'id');
    }

    public function media() {
        return $this->hasMany('App\Models\Medias', 'post_id', 'id');
    }

    public function likes() {
        return $this->hasMany('App\Models\Likes', 'post_id', 'id');
    }
}
