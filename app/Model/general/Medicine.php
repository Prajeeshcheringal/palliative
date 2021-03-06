<?php

namespace App\Model\general;

use Illuminate\Database\Eloquent\Model;

class Medicine extends Model
{
    protected $fillable=['medicine','batch_no','exp_date','quantity','date_of_purchase','from'];
}
