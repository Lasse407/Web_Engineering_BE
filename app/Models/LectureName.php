<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LectureName extends Model
{
    use HasFactory;

    public function lectures(){
        return $this->belongsToMany(Lecture::Class);
    }
}
