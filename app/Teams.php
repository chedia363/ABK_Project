<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Teams extends Model
{
    protected $table = 'teams_a_b_k';
    protected $fillable = [
        'name', 'description'
    ];
}
