<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TableTime extends Model
{
    use HasFactory;

    protected $fillable = ['staff_id', 'table_id', 'time_start', 'time_end'];

    public function table()
    {
        return $this->belongsTo(Table::class, 'table_id');
    }

    public function staff()
    {
        return $this->belongsTo(User::class, 'staff_id');
    }
}
