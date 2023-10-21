<?php

namespace App\Models\Frontend;

use App\Models\Backend\TournamentGame;
use App\Models\Subscriber;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TournamentPaymentDetails extends Model
{
    use HasFactory;
    protected $guarded = [];
    public function Subscriber()
    {
        return $this->belongsTo(Subscriber::class);
    }
    public function TournamentGame()
    {
        return $this->belongsTo(TournamentGame::class);
    }
}
