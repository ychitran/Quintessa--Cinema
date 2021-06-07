<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FormatFilm extends Model
{
    use HasFactory;
    protected $table = 'format_films';
    public function film() {
        return $this->hasMany('App\Models\Film');
    }
}
