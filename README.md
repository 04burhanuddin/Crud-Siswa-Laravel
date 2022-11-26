## Panduan Penggunaan
- Jalankan `composer update` In directory root projct
- Kemudian jalankan `copy .env.example .env`
- Selanjutnya jalankan `php artisan key:generate`
- Buat databas <b>akademik</b> di phpmyadmin
- Langkah selanjutnya setting database nya di .env sebagai berikut:
    ```env
    DB_CONNECTION=mysql
    DB_HOST=127.0.0.1
    DB_PORT=3306
    DB_DATABASE=crud_siswa
    DB_USERNAME=YOUR_USERNAME
    DB_PASSWORD=YOUR_PASSWORD
    ```
- Lanjut jalankan `php artisan migrate`
- Kemudian `php artisan db:seed`
- Dan yang terakhir jalankan `php artisan serve`
- Well Done
