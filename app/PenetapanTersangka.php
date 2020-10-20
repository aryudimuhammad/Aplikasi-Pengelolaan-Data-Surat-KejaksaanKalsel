<?php

namespace App;

use App\Traits\Uuid;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class PenetapanTersangka extends Model
{
    use Notifiable;
    use Uuid;

    public function Panggilan_tersangka()
    {
        return $this->belongsTo(Panggilan_tersangka::class);
    }
}
