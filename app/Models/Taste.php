<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Taste extends Model
{
    use HasFactory;

    public function sauser(){

        return $this->hasMany(Saucer::class);

    }
}
