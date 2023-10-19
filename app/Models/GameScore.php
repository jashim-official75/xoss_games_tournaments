<?php

namespace App\Models;

use App\Models\Backend\TournamentGame;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GameScore extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function SubUser(){
        return $this->belongsTo(Subscriber::class, 'subscriber_id');
    }

    public function TournamentGame()
    {
        return $this->belongsTo(TournamentGame::class);
    }
}
