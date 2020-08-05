<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserInfo extends Model
{
     /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'first_name','last_name', 'nic','contact','gender','address','user_id',
    ];

     /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
    ];

    //
    public function user(){
        return $this->belongsTo('App\User');
    }
}
