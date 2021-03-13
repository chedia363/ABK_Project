<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Fields extends Model
{
    protected $fillable = [
        'name', 'description', 'cover', 'file_name'
    ];
}
