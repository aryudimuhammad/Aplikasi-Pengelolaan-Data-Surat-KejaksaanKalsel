<?php

namespace App;

use App\Traits\Uuid;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Aduan extends Model
{
    use Notifiable;
    use Uuid;

    public function surat_terima()
    {
        return $this->hasMany(Surat_terima::class);
    }
}
