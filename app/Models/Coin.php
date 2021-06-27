<?php

namespace App\Models;

use App\Models\Coin;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Coin extends Model
{
    use HasFactory;

    protected $fillables = [
        'name', 'wallet_id',
    ];

    public function deposit()
    {
        return $this->hasMany(Coin::class);
    }
    
    public function withdrawal()
    {
        return $this->hasMany(Coin::class);
    }
}
