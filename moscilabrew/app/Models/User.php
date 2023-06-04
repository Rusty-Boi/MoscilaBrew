<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];

    private static $transactions = [
        [
            'tgl-transaksi' => '31 Juni 2023',
            'vendor-logo' => 'img/coffee-pack.png',
            'vendor-name' => 'Vendor Name',
            'product-items' => [[
                                'product-img' => 'img/aceh-gayo.png',
                                'product-title' => 'Kopi Gayo',
                                'price' => 'Rp.90.000',
                                'qty' => '2'
                                ]],
            'total-price' => "Rp. 180.000"
        ],
        [
            'tgl-transaksi' => '2 Maret 2023',
            'vendor-logo' => 'img/coffee-pack.png',
            'vendor-name' => 'Vendor Name',
            'product-items' => [[
                                'product-img' => 'img/aceh-gayo.png',
                                'product-title' => 'Kopi Gayo',
                                'price' => 'Rp. 90.000',
                                'qty' => '1'
                                ],[
                                'product-img' => 'img/aceh-gayo.png',
                                'product-title' => 'Kopi Hitam',
                                'price' => 'Rp. 50.000',
                                'qty' => '1'
                                ]],
            'total-price' => "Rp. 180.000"
        ]
    ];

    public static function allTransaction(){
        return self::$transactions;
    }
}
