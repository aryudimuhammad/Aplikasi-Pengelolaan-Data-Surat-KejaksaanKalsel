<?php

namespace App;

use App\Traits\Uuid;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Permintaan_keterangan extends Model
{
    use Notifiable;
    use Uuid;

    public function perintah_penyelidikan()
    {
        return $this->belongsTo(Perintah_penyelidikan::class);
    }

    public function warga()
    {
        return $this->belongsTo(Warga::class);
    }

    public function hasil_penyelidikan()
    {
        return $this->hasOne(Hasil_penyelidikan::class);
    }
}
