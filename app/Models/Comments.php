<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comments extends Model
{
    //
    use HasFactory;
    protected $table = 'comments';

    public function post() {
        return $this->belongsTo('App\Posts', 'post_id', 'id');
    }

    public function user() {
        return $this->belongsTo('App\User', 'user_id', 'id');
    }
}
