<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MedicalRecord extends Model
{
    //

    protected $fillable = [
        'medical_record','patient_id',
    ];

    public function patientinfo(){
        return $this->belongsTo('App\PatientInfo');
    }
}
