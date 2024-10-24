<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable=[
        'productid',
        'title',
        'description',
        'size',
        'color',
        'price',
        'quantity',
        'images', 
        'category_id',
        'brand_id'
    ];

    // Mutator for storing 'images' in json
    public function setImagesAttribute($value)
    {
        $this->attributes['images'] = json_encode($value);
    }

    // Accessor for converting the 'images' attribute
    public function getImagesAttribute($value)
    {
        return json_decode($value,true);

    }

        // Mutator for storing 'size' as JSON
        public function setSizeAttribute($value)
        {
            // If the value is a string, split it into an array by commas
            if (is_string($value)) {
                $value = array_map('trim', explode(',', $value));  // Trim spaces and explode
            }
            
            // Always encode the array into a JSON string
            $this->attributes['size'] = json_encode($value);
        }

        // Accessor for retrieving 'size' from JSON
        public function getSizeAttribute($value)
        {
            // Decode the JSON string into an array, returning null if decoding fails
            return json_decode($value, true) ?: [];
        }

    // Mutator for storing 'color' in json
    public function setColorAttribute($value)
    {
         // If the value is a string, split it into an array by commas
        if (is_string($value)) {
            $value = explode(',', $value);
        }

        $this->attributes['color'] = json_encode($value);
    }

    // Accessor for capitalizing the 'Color' attribute
    public function getColorAttribute($value)
    {
        return json_decode($value);
    }


    public function seller()
    {
        return $this->BelongsTo(Seller::class);
    }

    // public function scopeDraft($query)
    // {
    //     return $query->where('status', false);
    // }
}
