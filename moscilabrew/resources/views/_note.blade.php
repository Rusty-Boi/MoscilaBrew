Coffee::create(['product_img' => 'img/aceh-gayo.png',
'vendor_id' => '0c3c457c-0506-11ee-b582-744ca18bad0c',
'product_name' => 'Kopi Gayo',
'product_desc' => 'Lorem ipsum dolor sit...',
'bean_category_name' => 'Arabica',
'jumlah_stok' => 55,
'harga_product' => 60000,
'rating_product' => 4.8,
'average' => 'Terjual 100+',
'jumlah_review' => 200])

Coffee::create(['product_img' => 'img/aceh-gayo.png',
'vendor_id' => '0c3c457c-0506-11ee-b582-744ca18bad0c',
'product_name' => 'Kopi Luak',
'product_desc' => 'Lorem ipsum dolor sit...',
'bean_category_name' => 'Robusta',
'jumlah_stok' => 70,
'harga_product' => 100000,
'rating_product' => 4.5,
'average' => 'Terjual 20+',
'jumlah_review' => 200])


Vendor::create([
    'vendor_name' => 'Aceh',    
    'vendor_logo' => 'img/coffee-pack.png'
])

Vendor::create([
    'vendor_name' => 'Vendor Name',    
    'vendor_logo' => 'img/coffee-pack.png'
])


User::create([
    'name' => 'Hengki',
    'email' => 'hengki@gmail.com',
    'password' => 'bene',
    'address' => 'bengkayang',
    'phone_number' => '081257520000'
])

User::create([
    'name' => 'Bene',
    'email' => 'bene@gmail.com',
    'password' => 'ben',
    'address' => 'bengkayang',
    'phone_number' => '0812575210000'
])

<!--  
    RELATIONSHIP
-->
One to one -> hasOne()
One to one (reverse) -> belongsTo()



<!-- 
    MIGRATIONS 
-->

<!-- setelah membuat migration baru -->
composer dumpautoload
php artisan migrate:fresh