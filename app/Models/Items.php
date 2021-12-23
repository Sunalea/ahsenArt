<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class items extends Model
{
    use HasFactory;

    public $timestamps = false; 

    protected $fillable = [ 
        'title', 'price', 'description', 'class', 'image'
    ];

    public function getPriceAttribute($value)
    {
        return str_replace('.', ',', $value);
    }

    public function setPriceAttribute($value)
    {
        $this->attributes['price'] = str_replace(',', '.', $value);
    }
}
