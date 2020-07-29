<?php

namespace App;

use App\Traits\Uuid;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Perintah_penyelidikan extends Model
{
    use Notifiable;
    use Uuid;
}
