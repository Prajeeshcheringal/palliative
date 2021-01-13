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
        'ref_no',
        'organization',
        'pincode',
        'volunteer',
        'location',
        'disease',
        'category',
        'financial_status'
    ];

    public function getDiseaseRelation(){
        return $this->belongsTo('App\Model\general\Disease','disease','id');
    }
}
