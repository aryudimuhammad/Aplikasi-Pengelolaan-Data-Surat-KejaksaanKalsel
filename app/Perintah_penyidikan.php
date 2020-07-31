<?php

namespace App;

use App\Traits\Uuid;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Perintah_penyidikan extends Model
{
    use Notifiable;
    use Uuid;

    public function hasil_penyelidikan()
    {
        return $this->belongsTo(Hasil_penyelidikan::class);
    }

    public function panggilan_tersangka()
    {
        return $this->hasOne(Panggilan_tersangka::class);
    }

    public function pegawai()
    {
        return $this->belongsTo(Pegawai::class);
    }
}
