<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Subscriber extends Authenticatable
{
    use HasFactory;
    // protected $guard = 'subscriber';
    protected $guarded = [];

    public function GameScore()
    {
        return $this->hasMany(GameScore::class);
    }
}
