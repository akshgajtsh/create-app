<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vacation extends Model
{
    protected $fillable = [
        'user_id',
        'vacation_month',
        'vacation_start',
        'vacation_end',
        'half_vacation',
        'vacation_days',
        'vacation_reason',
        'clientcheck',
        'comment',
    ];
}
