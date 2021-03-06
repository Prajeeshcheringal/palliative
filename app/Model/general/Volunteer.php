<?php

namespace App\Model\general;

use Illuminate\Database\Eloquent\Model;

class Volunteer extends Model
{
    protected $fillable=['name','role','vol_id','address','phone','gender'];
}
