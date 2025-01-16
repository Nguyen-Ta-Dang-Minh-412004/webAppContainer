<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Table extends Model
{
    use HasFactory;

    protected $fillable = ['table_number', 'status', 'price', 'area'];

    public function orders()
    {
        return $this->hasMany(Order::class, 'table_id');
    }

    public function tablesTime()
    {
        return $this->hasMany(TableTime::class, 'table_id');
    }
}
