<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Room;

class Faculty extends Model
{
    use HasFactory;

    public $incrementing = false;

    public function rooms () {
        return $this->hasMany(Room::class);
    }
}
