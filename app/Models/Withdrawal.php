<?php

namespace App\Models;

use App\Models\Coin;
use App\Models\User;
use NumberFormatter;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Withdrawal extends Model
{
    use HasFactory;

    protected $fillable = [
        'amount', 'wallet_id', 'coin', 'withdraw_from'
    ];

    public function coin()
    {
        return $this->belongsTo(Coin::class);
    }
    
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function getAmountAttribute($amount)
    {
        $fmt = new NumberFormatter('en_US', NumberFormatter::CURRENCY);
        return $fmt->formatCurrency($amount, 'USD');
    }
}
