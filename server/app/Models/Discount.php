<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Discount extends Model
{
    use HasFactory;
    public function ticket_detail() {
        return $this->hasMany('App\Models\TicketDetail');
    }
}
