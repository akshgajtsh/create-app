<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
//use Illuminate\Database\Eloquent\Factories\HasFactory;

class Message extends Model
{
    //use HasFactory;
    protected $fillable = ['body', 'bot_response_id', 'created_at'];

    public function botResponse()
    {
        return $this->belongsTo(Botresponse::class);
    }
}
