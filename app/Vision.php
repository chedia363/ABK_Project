<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vision extends Model
{
    protected $table = 'vision_a_b_k';
    protected $fillable = [
        'name', 'description'
    ];
}
