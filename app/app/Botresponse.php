<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Botresponse extends Model
{
    protected $fillable = ['keyword', 'reply', 'link'];

    public function messages()
    {
        return $this->belongsTo(Message::class);
    }
}
