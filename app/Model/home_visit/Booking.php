<?php

namespace App\Model\home_visit;

use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    protected $fillable = ['pat_id', 'note', 'date'];

    function getPatientRelation()
    {
        return $this->belongsTo('App\Model\patients\Patient', 'pat_id', 'id');
    }
}
