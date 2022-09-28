<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lecture extends Model
{
    use HasFactory;

    public function speakers(){
        return $this->belongsToMany(Speaker::Class);
    }

    public function rooms(){
        return $this->belongsToMany(Room::Class);
    }

    public function names(){
        return $this->belongsToMany(LectureName::Class);
    }
}


