<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Anggotas;
use App\Models\Groups;

class history extends Model
{
    use HasFactory;

    protected $fillable = [
        'anggotas_id', 'groups_id', 'status'
    ];

    // Buat Relasi Dengan Table Anggota
    public function anggotas()
    {
        return $this->belongsTo(anggotas::class);
    }

    // Buat Relasi Dengan Table Group
    public function groups()
    {
        return $this->belongsTo(groups::class);
    }

    
}
