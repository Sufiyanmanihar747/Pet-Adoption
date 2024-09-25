<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    use HasFactory;
    protected $fillable = [
        'address',
        'city',
        'state',
        'user_id'
    ];

    public function address(){
        return $this->belongsTo(Pet::class,'pet_id');
    }
}
