<?php

namespace App\Models;

use App\Models\Groups;
use App\Models\history;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Anggotas extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function groups()
    {
        return $this->belongsTo(Groups::class);
    }

    public function history()
    {
        return $this->hasOne(history::class);
    }


}
