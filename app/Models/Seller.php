<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Seller extends Authenticatable
{

    use HasFactory;

    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    protected $hidden = [
        
    ];
    protected $casts = [
        'password' => 'hashed',  // Automatically hashes password when set
    ];

    public function address()
    {
        return $this->morphOne(Address::class,'addressable');
    }

    public function image()
    {
        return $this->morphOne(Image::class,'imageable');
    }

    public function product()
    {
        return $this->hasMany(Product::class);
    }
    
}
