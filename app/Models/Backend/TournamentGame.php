<?php

namespace App\Models\Backend;

use App\Models\GameScore;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TournamentGame extends Model
{
    use HasFactory;
    protected $guarded = [];
    public function Score()
    {
        return $this->hasMany(GameScore::class);
    }
}
