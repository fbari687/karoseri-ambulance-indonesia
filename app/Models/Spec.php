<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Car;

class Spec extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function cars()
    {
        return $this->belongsToMany(Car::class);
    }
}
