<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Card;
use App\Models\card_order;

class Order extends Model
{
    use HasFactory;
    protected $fillable = [
        'users_id'
    ];

    public $timestamps = false;
    
    public function user(){
        return $this->belongsTo(User::class);
    }
    public function cards(){
        return $this->belongsToMany(Card::class, 'card_order', 'order_id', 'card_id');
    }
    
}
