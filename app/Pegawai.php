<?php

namespace App;

use App\Traits\Uuid;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Pegawai extends Model
{
    use Notifiable;
    use Uuid;

    public function jabatan()
    {
        return $this->belongsTo(Jabatan::class);
    }

    public function pangkat()
    {
        return $this->belongsTo(Pangkat::class);
    }

    public function perintah_penyelidikan()
    {
        return $this->hasOne(Perintah_penyelidikan::class);
    }

    public function perintah_penyidikan()
    {
        return $this->hasOne(Perintah_penyidikan::class);
    }

    public function putusan_pengadilan()
    {
        return $this->hasOne(Putusan_pengadilan::class);
    }
}
