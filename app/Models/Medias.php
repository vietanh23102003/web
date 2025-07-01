<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Medias extends Model
{
    //
    use HasFactory;
    protected $table = 'medias';

    public function user() {
        return $this->belongsTo('App\User', 'user_id', 'id');
    }

    public function post() {
        return $this->belongsTo('App\Posts', 'post_id', 'id');
    }
}
