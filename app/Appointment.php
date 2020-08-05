<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Appointment extends Model
{
    //
    public function patientinfo(){
        return $this->belongsTo('App\PatientInfo');
    }
}
