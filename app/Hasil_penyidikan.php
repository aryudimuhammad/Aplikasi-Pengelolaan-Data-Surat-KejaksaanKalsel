<?php

namespace App;

use App\Traits\Uuid;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Hasil_penyidikan extends Model
{
    use Notifiable;
    use Uuid;

    public function panggilan_tersangka()
    {
        return $this->belongsTo(Panggilan_tersangka::class);
    }

    public function putusan_pengadilan()
    {
        return $this->hasOne(Putusan_pengadilan::class);
    }
}
