<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory;
    protected $fillable = ['genre', 'price', 'description', 'photo'];

    public function order()
    {
        return $this->belongsTo(Order::class);
    }
}
