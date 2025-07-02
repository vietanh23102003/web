<?php

namespace App\Models;

use App\Models\Profile; 
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
class User extends Authenticatable
{
    //
    use HasFactory;
    protected $table = 'users';
    public $timestamps = false;
    protected $fillable = ['first_name','last_name','email','password','profile_id','hobbies_id', 'remember_token'];
    public function friends(){
    	return $this->belongstoMany('App\Models\Friend');
    }

    public function messagesFrom(){
    	return $this->hasMany('App\mModels\essages','from','id');
    }

    public function messagesTo(){
    	return $this->hasMany('App\Models\messages','to','id');
    }

    public function profile(){
    	return $this->hasOne('App\Models\Profile',"id","id");
    }

    public function hobbies(){
    	return $this->hasOne('App\Models\Hobbie','id','id');
    }

    public function posts(){
    	return $this->hasMany('App\Models\Posts','user_id','id');
    }

    public function likes(){
        return $this->hasMany('App\Models\likes','user_id','id');
    }
}
