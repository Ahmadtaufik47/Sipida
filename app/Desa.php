<?php

namespace App;

use App\InfoDesa;
use App\Struktural;
use Illuminate\Database\Eloquent\Model;

class Desa extends Model
{
    protected $guarded = ['id'];

    public function struktural()
    {
        return $this->hasMany(Struktural::class);
    }

    public function info_desa()
    {
        return $this->hasMany(InfoDesa::class);
    }
}
