<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $fillable = ['player_id', 'table_id', 'order_date', 'start_time', 'end_time', 'total_price'];

    public function player()
    {
        return $this->belongsTo(Player::class, 'player_id');
    }

    public function table()
    {
        return $this->belongsTo(Table::class, 'table_id');
    }

    public function orderItems()
    {
        return $this->hasMany(OrderItem::class, 'order_id');
    }
}
