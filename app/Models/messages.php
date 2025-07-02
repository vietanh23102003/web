<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class messages extends Model
{
    //
    protected $table = 'messages';
    protected $fillable = ['from','to','content','send_date','read_date'];
    public $timestamps = false;

    public function toUsers(){
    	return $this->belongstoMany('App\Models\User');
    }

    public function fromUser(){
    	return $this->belongsto('App\Models\User');
    }
    public function profile(){
    	return $this->hasOne('App\Models\Profile',"id","from");
    }
    public function user(){
    	return $this->hasOne('App\Models\User',"id","from");
    }
}
