## Cara Penggunaan
1. Install composer dependencies dengan cara menjalankan `composer install` di terminal pada folder project
2. Buat file `.env`
3. Generate application key dengan cara menjalankan `php artisan key:generate` di terminal pada folder project
4. Lakukan set up konfigurasi database yang ada di dalam file `.env`
5. Buat database dengan menyesuaikan nama database yang sudah dituliskan dalam file `.env`
6. Lakukan migration dan seeding database dengan menjalankan `php artisan migrate:fresh --seed`. Pastikan server database telah aktif
7. Jalankan `php artisan serve` dan akses `http://localhost:8000` secara default
8. Semua jawaban pada soal tertera pada navigation bar
