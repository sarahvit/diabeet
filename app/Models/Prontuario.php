<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Prontuario extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function questionarios()
    {
        return $this->belongsToMany(Questionario::class);
    }

}
