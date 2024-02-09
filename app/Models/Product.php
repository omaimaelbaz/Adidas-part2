<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Product extends Model
{
    use HasFactory;
    protected $fillable =[
        'name',
        'description',
        'price',
        'category_id',
        'Img_path',
        'Quantity'

    ];
    public function category()
    {
        return $this->belongsTo(Categories::class);
    }
 }
