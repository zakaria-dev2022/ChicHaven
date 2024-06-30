<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory;
    protected $fillable = ['genre', 'price', 'description', 'photo'];

    public function orders()
    {
        return $this->hasMany(Order::class);
    }
}
