<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Adoption extends Model
{
    use HasFactory;
    protected $fillable = [
        'pet_id',
        'user_id',
        'status',
        'remarks',
        'review_id',
    ];

    public function pet()
    {
        return $this->belongsTo(Pet::class);
    }
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
