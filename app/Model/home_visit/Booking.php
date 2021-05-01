<?php

namespace App\Model\home_visit;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Booking extends Model
{
    protected $fillable = [
        'pat_id', 'bok_note', 'date', 'disease_details', 'doctors_note', 'mental_note', 'bp', 'pulse', 'tempreture', 'general_state', 'mouth', 'hobbies', 'skin',
        'head', 'hidden_area', 'sex', 'other_treatment', 'surroundings', 'constipation', 'sleep', 'body_cleaning', 'exercise', 'urine', 'water', 'food', 'bok_type','status','nurse_note'
    ];

    function getPatientRelation()
    {
        return $this->belongsTo('App\Model\patients\Patient', 'pat_id', 'id');
    }
    public function getDateAttribute($value)
    {
        $date = Carbon::parse($value);
        return $date->format('d-M-y');
    }
}
