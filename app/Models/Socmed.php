<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Socmed extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function contact()
    {
        return $this->hasOne(Contact::class, 'socmed_id');
    }
}
