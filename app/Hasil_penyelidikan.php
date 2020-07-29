<?php

namespace App;

use App\Traits\Uuid;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Hasil_penyelidikan extends Model
{
    use Notifiable;
    use Uuid;

    public function permintaan_keterangan()
    {
        return $this->belongsTo(Permintaan_keterangan::class);
    }

    public function perintah_penyidikan()
    {
        return $this->hasOne(Perintah_penyidikan::class);
    }
}
