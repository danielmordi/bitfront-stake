<?php

namespace App\Models;

use NumberFormatter;
use App\Models\Deposit;
use App\Models\Package;
use App\Models\Withdrawal;
use Illuminate\Notifications\Notifiable;
use Laravel\Fortify\TwoFactorAuthenticatable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use HasFactory, Notifiable, TwoFactorAuthenticatable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'username',
        'email',
        'password',
        'role_id',
        'package',
        'wallet_balance',
        'bonus',
        'hashing_fee',
        'profit',
        'referrer_id'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

     public function getWalletBalanceAttribute($profit)
     {
         $fmt = new NumberFormatter('en_US', NumberFormatter::CURRENCY);
         return $fmt->formatCurrency($profit, 'USD');
     }
     
     public function getHashingFeeAttribute($hash_rate)
     {
         $fmt = new NumberFormatter('en_US', NumberFormatter::CURRENCY);
         return $fmt->formatCurrency($hash_rate, 'USD');
     }

     public function getBonusAttribute($bonus)
     {
         $fmt = new NumberFormatter('en_US', NumberFormatter::CURRENCY);
         return $fmt->formatCurrency($bonus, 'USD');
     }

    /**
     * The accessors to append to the model's array form.
     *
     * @var array
     */
    protected $appends = ['referral_link'];

    /**
     * Get the user's referral link.
     *
     * @return string
     */
    public function getReferralLinkAttribute()
    {
        return $this->referral_link = route('register', ['ref' => $this->username]);
    }

    public function package()
    {
        return $this->hasMany(Package::class);
    }

    public function deposit()
    {
        return $this->hasMany(Deposit::class);
    }
    
    public function withdrawal()
    {
        return $this->hasMany(Withdrawal::class);
    }

    public function referrer()
    {
        return $this->belongsTo(User::class,'referrer_id',  'id');
    }

    public function referrals()
    {
        return $this->hasMany(User::class,'referrer_id',  'id');
    }
}
