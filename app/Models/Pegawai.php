<?php

namespace App\Models;

use App\Models\Kontrak;
use App\Models\JabatanPegawai;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Pegawai extends Model
{
    use HasFactory, HasUuids;

    protected $fillable = ['nama', 'username', 'password', 'jabatan_pegawais_id', 'kontraks_id'];


    public function jabatanPegawais()
    {
        return $this->belongsTo(JabatanPegawai::class);
    }

    public function kontraks()
    {
        return $this->belongsTo(Kontrak::class);
    }
}
