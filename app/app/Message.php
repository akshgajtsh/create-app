<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
//use Illuminate\Database\Eloquent\Factories\HasFactory;

class Message extends Model
{
    protected $fillable = ['user_id', 'body', 'botresponse_id'];

    public function botResponse()
    {
        return $this->belongsTo(Botresponse::class);
    }
}
