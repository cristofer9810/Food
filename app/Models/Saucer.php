<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Saucer extends Model
{
    use HasFactory;

    public function taste(){

        return $this->belongsTo(Taste::class);

    }
}
