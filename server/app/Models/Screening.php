<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Screening extends Model
{
    use HasFactory;
    public function film() {
        return $this->belongsTo('App\Models\Film','film_id','id');
    }

    public function order() {
        return $this->hasMany('App\Models\Ticket');
    }

    public function ticket_detail() {
        return $this->hasMany('App\Models\TicketDetail');
    }

    public function room() {
        return $this->belongsTo('App\Models\Room','room_id','id');
    }
}
