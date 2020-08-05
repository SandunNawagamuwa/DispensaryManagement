<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class task extends Model
{
    protected $fillable = [
        'p_id','rate', 'civil_status',
    ];
    protected $hidden = [
    ];
 
 
     public function user(){
         return $this->belongsTo('App\User');
     }
 
     public function medicalrecord(){
         return $this->hasMany('App\MedicalRecord');
     }
     public function rate(){
        return $this->hasMany('App\task');
    }
 
     public function appointment(){
         return $this->hasMany('App\Appointment');
     }
}
