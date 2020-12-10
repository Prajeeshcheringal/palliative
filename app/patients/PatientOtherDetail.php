<?php

namespace App\patients;

use Illuminate\Database\Eloquent\Model;

class PatientOtherDetail extends Model
{
    protected $fillable = ['need_food', 'report_of_person', 'patient_assumptiom', 'relative_assumption', 'patient_social'];
}
