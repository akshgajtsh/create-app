<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Transportation extends Model
{
    use Notifiable;
    protected $fillable = [
        'user_id',
        'transportation_month',
        'work_days',
        'transportation_confirm',
        'transportation_cost',
        'transportation_section',
    ];
}
