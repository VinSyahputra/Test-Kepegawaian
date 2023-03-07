<?php

namespace App\Models;

use App\Models\Pegawai;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Kontrak extends Model
{
    use HasFactory;

    public function pegawai()
    {
        return $this->hasOne(Pegawai::class);
    }
}
