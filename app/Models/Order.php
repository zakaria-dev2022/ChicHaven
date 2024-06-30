<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    protected $fillable = ['price', 'Quantity','client_id','article_id'];

    public function client()
    {
        return $this->belongsTo(Client::class);
    }

    public function article()
    {
        return $this->belongsTo(Article::class);
    }
}
