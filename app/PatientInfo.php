<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PatientInfo extends Model
{
    /**
    * The attributes that are mass assignable.
    *
    * @var array
    */
   protected $fillable = [
       'bday','blood_group', 'civil_status','numberof_child','allergies','user_id',
   ];

    /**
    * The attributes that should be hidden for arrays.
    *
    * @var array
    */
   protected $hidden = [
   ];


    public function user(){
        return $this->belongsTo('App\User');
    }

    public function medicalrecord(){
        return $this->hasMany('App\MedicalRecord');
    }

    public function appointment(){
        return $this->hasMany('App\Appointment');
    }
}
