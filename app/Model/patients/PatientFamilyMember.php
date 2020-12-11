<?php

namespace App\Model\patients;

use Illuminate\Database\Eloquent\Model;

class PatientFamilyMember extends Model
{
    protected $fillable=['pat_id','name','relation','age','education','married','job','disease','remark'];
}
