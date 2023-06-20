<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use App\Models\History;
use App\Models\Cart;
use App\Models\Order;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

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
        'address',
        'phone_number'
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

    // delivery address
    static $delivery_address_list = [
        [
            'label' => 'Home', // unique
            'address' => 'Jl. Meruya Selatan No.36, RT.5/RW.1, Joglo, Kec. Kembangan, Kota Jakarta Barat, Daerah Khusus Ibukota Jakarta 11640',
            'phone_number' => "081299878847"
        ],
        [
            'label' => 'Kantor',
            'address' => 'Jl. Meruya Selatan No.36, RT.5/RW.1, Joglo, Kec. Kembangan, Kota Jakarta Barat, Daerah Khusus Ibukota Jakarta 11640',
            'phone_number' => "081299878847"
        ],
        [
            'label' => 'Kos',
            'address' => 'Jl. Meruya Selatan No.50, RT.5/RW.1, Joglo, Kec. Kembangan, Kota Jakarta Barat, Daerah Khusus Ibukota Jakarta 11640',
            'phone_number' => "081299870312"
        ]
    ];

    /**
     * Get the cart associated with the user.
     */
    public function carts(): HasMany
    {
        return $this->hasMany(Cart::class);
    }

    /**
     * Get the orders associated with the user.
     */
    public function orders(): HasMany
    {
        return $this->hasMany(Order::class);
    }

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
            'total-price' => "Rp. 180.000",
            'status' => 'Processing'
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
            'total-price' => "Rp. 180.000",
            'status' => 'Done'
        ]
    ];

    public static function allTransaction(){
        return self::$transactions;
    }

    public static function allDeliveryAddress(){
        return self::$delivery_address_list;
    }

    /**
     * Get the histories associated with the user.
     */
    public function histories(): HasMany
    {
        return $this->hasMany(History::class);
    }
}
