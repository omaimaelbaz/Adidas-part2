<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class permission extends Model
{
    use HasFactory;
    protected $fillable=[
        'route_id',
        'role_id'
    ];
    public function route()
    {
        return $this->belongsTo(Route::class);

    }
    public function role()
    {
        return $this->belongsTo(Role::class);


    }
}
