<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gallery extends Model
{
    use HasFactory;

    protected $fillable =['url'];

    //relacion polimorfica

    public function imageable()
    {
        return $this->morphTo();
    }
}
