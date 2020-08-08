<?php

namespace App;

use App\Traits\Uuid;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Perintah_penyelidikan extends Model
{
    use Notifiable;
    use Uuid;

    public function Surat_terima()
    {
        return $this->belongsTo(Surat_terima::class);
    }

    public function permintaan_keterangan()
    {
        return $this->hasOne(Permintaan_keterangan::class);
    }

    public function pegawai()
    {
        return $this->belongsTo(Pegawai::class);
    }

    public function detail_penyelidikan()
    {
        return $this->belongsTo(Detailpenyelidikan::class);
    }
}
