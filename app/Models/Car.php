<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    use HasFactory;
    public function avtosalon(){
        return $this->belongsTo(Avtosalon::class);
    }
    public function brandmodel(){
        return $this->belongsTo(CarModel::class);
    }
}
