<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profil extends Model
{
    protected $table = 'profil_user';

    protected $fillable = [
        'shipping_address', 'photo', 'phone_number', 'user_id'
    ];

    public function user(){
        return $this->belongsTo('App\User');
    }
}
