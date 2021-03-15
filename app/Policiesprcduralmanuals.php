<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Policiesprcduralmanuals extends Model
{
    protected $table = 'policiesprcduralmanuals';
    protected $fillable = [
        'name', 'file_name', 'cover', 'description'
    ];
}
