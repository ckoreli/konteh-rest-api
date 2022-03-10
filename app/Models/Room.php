<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Desk;

class Room extends Model
{
    use HasFactory;

    public $incrementing = false;

    public function desks () {
        return $this->hasMany(Desk::class);
    }
}
