<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TicketDetail extends Model
{
    use HasFactory;
    protected $table = 'ticket_details';

    public function screening() {
        return $this->belongsTo('App\Models\Screening','screening_id','id');
    }

    public function user() {
        return $this->belongsTo('App\Models\User','user_id','id');
    }

    public function combo() {
        return $this->belongsTo('App\Models\Combo');
    }

    public function discount() {
        return $this->belongsTo('App\Models\Discount');
    }
}
