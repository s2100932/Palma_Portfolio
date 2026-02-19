<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Experience extends Model
{
    protected $table = 'expeiences';

    protected $fillable = [
        'role',
        'organization',
        'description',
        'year'
    ];
}
