<?php

namespace App;

use App\Traits\Uuid;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Surat_terima extends Model
{
    use Notifiable;
    use Uuid;

    public function Perintah_penyelidikan()
    {
        return $this->hasOne(Perintah_penyelidikan::class);
    }

    public function Aduan()
    {
        return $this->belongsTo(Aduan::class);
    }

    public function Warga()
    {
        return $this->belongsTo(Warga::class);
    }
}
