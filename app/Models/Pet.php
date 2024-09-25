<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pet extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'breed',
        'age',
        'description',
        'gender',
        'image',
        'status',
        'user_id',
        'species',
        'address_id',
    ];
    public function categories()
    {
        return $this->belongsTo(Category::class, 'species');
    }
    public function users(){
        return $this->belongsTo(User::class,'user_id');
    }

    public function address(){
        return $this->belongsTo(Address::class,'address_id');
    }

}
