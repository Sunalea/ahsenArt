<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class item_info extends Model
{
    use HasFactory;

    protected $table = 'item_info';

    protected $fillable = [ 
        'class'
    ];

    public function shopping_items()
    {
        return $this->belongsTo(shopping_items::class);
    }

    public function getPriceAttribute($value)
    {
        return str_replace('.', ',', $value);
        return (int) $value;
    }
}
