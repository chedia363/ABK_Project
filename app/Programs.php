<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Programs extends Model
{
    protected $fillable = [
        'name', 'description', 'cover', 'file_name'
    ];
}
