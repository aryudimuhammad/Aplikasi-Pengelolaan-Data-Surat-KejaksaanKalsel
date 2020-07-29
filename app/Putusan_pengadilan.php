<?php

namespace App;

use App\Traits\Uuid;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Putusan_pengadilan extends Model
{
    use Notifiable;
    use Uuid;

    public function hasil_penyidikan()
    {
        return $this->belongsTo(Hasil_penyidikan::class);
    }
}
