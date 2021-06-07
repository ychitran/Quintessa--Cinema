<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    use HasFactory;
    public function seat() {
        return $this->hasMany('App\Models\Screening','room_id','id');
    }

    public function cinema() {
            return $this->belongsTo('App\Models\Cinema');
    }
}
