<?php

namespace App\Model\patients;

use Illuminate\Database\Eloquent\Model;

class PatientFamilyMember extends Model
{
    protected $fillable=['pat_id','name','relation','age','education','married','job','is_student'];




    public function getPatientRelation(){

        return $this->belongsTo('App\Model\patients\Patient','pat_id','id');
    }
}
