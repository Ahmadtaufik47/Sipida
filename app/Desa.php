<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Desa extends Model
{
    protected $guarded = ['id'];

    public function struktural()
    {
        return $this->hasMany(Struktural::class);
    }
}
