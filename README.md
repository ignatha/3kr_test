## About Laravel

Running Aplikasi

# install composer

Dengan perintah `composer update`

# Set DB di file .env
# Jalankan migrate dan seeder user admin

Migrate Table `php artisan migrate`

Seeder user admin `php atisan db:seed --class=AdminSeeder`

# Jalankan server

Running `php artisan serve`

# Halaman Login

Route `/login` 

# Halaman Register

Route `/register`

# Halaman Home

Halaman Home Biasa bisa diakses oleh admin dan user biasa

Route `/home`

Halaman Home khusus admin hanya bisa diakses oleh admin

Route `/admin/home`

# Admin

user : admin
password : admin

