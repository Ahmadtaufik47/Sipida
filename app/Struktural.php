<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Struktural extends Model
{
    protected $guarded = ['id'];

    public function desa()
    {
        return $this->belongsTo(Desa::class);
    }
}
