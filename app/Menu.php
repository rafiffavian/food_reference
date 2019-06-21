<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    protected $table ="menu";
    protected $guarded =[];

    public function tipeMenu()
    {
        return $this->belongsTo(TypeMenu::class,'id_jenismenu');
    }
    public function tipeRestoran()
    {
        return $this->belongsTo(Restoran::class, 'id_restoran');
    }
}
