<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Card extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'prize'
    ];

    public $timestamps = false;

    public function orders(){
        return $this->belongsToMany(Order::class, 'card_order', 'order_id', 'card_id');
    }
}
