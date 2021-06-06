<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Seat extends Model
{
    use HasFactory;
    public function room(){
        return $this->belongsTo('App\Models\Room');
    }

    public function order() {
        return $this->hasOne('App\Models\Ticket','seat_id','id');
    }
}
