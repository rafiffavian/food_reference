<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Restoran extends Model
{
    protected $table ="restoran";
    protected $guarded = [];

    public function tipeWilayah()
    {
        return $this->belongsTo(Wilayah::class,'id_wilayah');
    }
}
