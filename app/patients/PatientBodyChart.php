<?php

namespace App\patients;

use Illuminate\Database\Eloquent\Model;

class PatientBodyChart extends Model
{
    protected $fillable=['pat_id','body_part','grade'];
}
