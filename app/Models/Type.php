<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Room;

class Type extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function room()
    {
        return $this->hasOne(Room::class);
    }
}
