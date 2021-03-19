<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Invests extends Model
{
    protected $table = 'investus_a_b_k';
    protected $fillable = [
        'cover', 'file_name'
    ];
}
