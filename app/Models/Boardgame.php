<?php

namespace App\Models;

use App\Models\User;
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
    public function user(){
        return $this->belongsTo(User::class);
    }
    //
}
