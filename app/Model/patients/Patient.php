<?php

namespace App\Model\patients;

use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
    protected $fillable=[ 'reg_no',
    'date',
    'name',
    'age',
    'phone',
    'address',
    'care_of',
    'panchayath',
    'ref_no',
    'organization',
    'pincode',
    'volunteer',
    'location'];
}
