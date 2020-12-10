<?php

namespace App\patients;

use Illuminate\Database\Eloquent\Model;

class PatientFamilyTree extends Model
{
    protected $fillable =['pat_id','name','relation'];
}
