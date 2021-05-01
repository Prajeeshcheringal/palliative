<?php

namespace App\Model\patients;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Patient extends Model
{
    protected $fillable = [
        'reg_no',
        'date',
        'name',
        'age',
        'phone',
        'address',
        'care_of',
        'panchayath',
        'reg_type',
        'pincode',
        'volunteer',
        'location', 
        'disease',
        'category',
        'financial_status',
        'care_of_relation',
        'current_status',
        'status_date',
        'status_remark',
        'route'
    ];

    public function getDiseaseRelation(){
        return $this->belongsTo('App\Model\general\Disease','disease','id');
    }
}
