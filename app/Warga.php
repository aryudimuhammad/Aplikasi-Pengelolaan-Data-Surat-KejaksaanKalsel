<?php

namespace App;

use App\Traits\Uuid;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Warga extends Model
{
    use Notifiable;
    use Uuid;

    public function Surat_terima()
    {
        return $this->hasOne(Surat_terima::class);
    }

    public function Permintaan_keterangan()
    {
        return $this->hasOne(Permintaan_keterangan::class);
    }

    public function Panggilan_tersangka()
    {
        return $this->hasOne(Panggilan_tersangka::class);
    }
}
