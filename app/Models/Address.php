<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    use HasFactory;

    protected $fillable = [
        'contact',
        'address',
        'province',
        'city',
        'postal_code',
        'country',
        'addressable_id',
        'addressable_type'
    ];

    public function addressable()
    {
        return $this->morphTo();
    }
}
