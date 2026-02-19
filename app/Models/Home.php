<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Home extends Model
{
   protected $table = "profiles";

   protected $fillable = [
    'first_name',
    'last_name',
    'title',
    'bio',
    'contact',
    'email',
    'location'

   ];
}
