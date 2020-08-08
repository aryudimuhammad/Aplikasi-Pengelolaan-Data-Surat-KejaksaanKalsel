<?php

namespace App;

use App\Traits\Uuid;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Detailputusanpengadilan extends Model
{
    use Notifiable;
    use Uuid;

    public function pegawai()
    {
        return $this->belongsTo(Pegawai::class);
    }
}
