<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profil extends Model
{
    protected $filable = [
        'shipping_address', 'photo', 'phone_number'
    ];

    public function user(){
        return $this->belongsTo('App\User');
    }
}
