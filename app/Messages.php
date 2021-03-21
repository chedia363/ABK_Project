<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Messages extends Model
{
    protected $table = 'messages_a_b_k';
    protected $fillable = [
        'description'
    ];
}
