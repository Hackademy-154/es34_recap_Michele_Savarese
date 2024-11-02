<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Boardgame extends Model
{
    protected $fillable = [
        'name',
        'description',
        'type',
        'img',
        'user_id'
    ];
    //
}
