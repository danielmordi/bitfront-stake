<?php

namespace App\Models;

use App\Models\Coin;
use App\Models\User;
use App\Models\Package;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use NumberFormatter;

class Deposit extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'coin_id',
        'package_id',
        'amount',
        'status'
    ];

    public function setMinValueAttribute($min_val)
    {
        return $this->attributes['min_val'] = $min_val * 100;
    }

    public function getMinValueAttribute($min_val)
    {
        return $min_val / 100;
    }

    public function getAmountAttribute($amount)
    {
        $fmt = new NumberFormatter('en_US', NumberFormatter::CURRENCY);
        return $fmt->formatCurrency($amount, 'USD');
    }

    public function setMaxValueAttribute($max_val)
    {
        return $this->attributes['max_val'] = $max_val * 100;
    }

    public function getMaxValueAttribute($max_val)
    {
        return $max_val / 100;
    }

    public function coin()
    {
        return $this->belongsTo(Coin::class);
    }

    public function package()
    {
        return $this->belongsTo(Package::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
