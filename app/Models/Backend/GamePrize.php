<?php

namespace App\Models\Backend;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GamePrize extends Model
{
    use HasFactory;
    protected $table = 'game_prizes';
    public function scopeByRank($query, $rank, $game_id)
    {
        return $query->where('tournament_game_id', $game_id)->where('position', $rank)->where('status', 1);
    }
}
