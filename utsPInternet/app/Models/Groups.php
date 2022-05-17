<?php

namespace App\Models;

use App\Models\Anggotas;
use App\Models\history;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Groups extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function anggotas()
    {
        return $this->hasMany(Anggotas::class);
    }

    // buat relasi dengan table history
    public function history()
    {
        return $this->hasMany(history::class);
    }
}
