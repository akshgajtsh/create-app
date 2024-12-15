<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vacation_cancel extends Model
{
    protected $fillable = [
        'user_id',
        'vacation_id',
        'cancel_reason',
        'comment',
        'vacation_start',
        'vacation_end',
    ];

    public function vacation()
    {
        return $this->belongsTo(Vacation::class, 'vacation_id');
    }
}
