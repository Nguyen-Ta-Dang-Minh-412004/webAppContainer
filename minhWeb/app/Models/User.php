<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    use HasFactory;

    protected $fillable = ['user_name', 'password','position'];

    public function tablesTime()
    {
        return $this->hasMany(TableTime::class, 'user_id');
    }
}
