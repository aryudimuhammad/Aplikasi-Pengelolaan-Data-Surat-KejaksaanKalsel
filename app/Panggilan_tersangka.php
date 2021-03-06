<?php

namespace App;

use App\Traits\Uuid;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Panggilan_tersangka extends Model
{
    use Notifiable;
    use Uuid;

    public function perintah_penyidikan()
    {
        return $this->belongsTo(Perintah_penyidikan::class);
    }

    public function hasil_penyidikan()
    {
        return $this->hasOne(Hasil_penyelidikan::class);
    }

    public function warga()
    {
        return $this->belongsTo(Warga::class);
    }
    public function pegawai()
    {
        return $this->belongsTo(Pegawai::class);
    }
    public function PenetapanTersangka()
    {
        return $this->belongsTo(PenetapanTersangka::class);
    }
}
