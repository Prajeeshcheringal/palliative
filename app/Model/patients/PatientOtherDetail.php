<?php

namespace App\Model\patients;

use Illuminate\Database\Eloquent\Model;

class PatientOtherDetail extends Model
{
    protected $fillable = ['need_food','pat_id', 'report_of_person', 'patient_assumptiom', 'relative_assumption', 'patient_social','resettlement','way_of_life','volunteer'];
}
