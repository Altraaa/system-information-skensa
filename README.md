
# Proyek Laravel - [System Information]

Ini adalah aplikasi Laravel yang di-clone dari Git. Ikuti langkah-langkah di bawah untuk menjalankan proyek ini secara lokal.

## Prasyarat

Pastikan Anda sudah menginstal alat berikut di komputer Anda:

- **Git**: Untuk meng-clone repository.
- **PHP**: Laravel membutuhkan PHP versi 7.3 atau lebih tinggi.
- **Composer**: Untuk mengelola dependensi Laravel.
- **Database**: MySQL atau MariaDB untuk menyimpan data.
- **Node.js dan npm**: Untuk mengelola frontend menggunakan Laravel Mix (opsional).

### Instalasi

1. **Clone Repository**
   
   Clone repository ini dengan perintah berikut:
   ```bash
   git clone https://gitlab.com/pindra21/system-information-backend.git
   ```

2. **Masuk ke Direktori Proyek**
   
   Masuk ke dalam direktori proyek yang baru saja di-clone:
   ```bash
   cd nama-folder-proyek
   ```

3. **Instal Dependensi PHP**

   Instal semua dependensi PHP menggunakan Composer:
   ```bash
   composer install
   ```

4. **Salin File `.env`**

   Salin file `.env.example` menjadi `.env`:
   ```bash
   cp .env.example .env
   ```

5. **Generate Key Aplikasi Laravel**

   Jalankan perintah untuk menghasilkan kunci aplikasi yang unik:
   ```bash
   php artisan key:generate
   ```

6. **Konfigurasi Database**

   Edit file `.env` dan atur pengaturan database Anda, misalnya untuk MySQL:
   ```plaintext
   DB_CONNECTION=mysql
   DB_HOST=127.0.0.1
   DB_PORT=3306
   DB_DATABASE=nama_database
   DB_USERNAME=username_database
   DB_PASSWORD=password_database
   ```

7. **Jalankan Migrasi Database**

   Jalankan migrasi untuk membuat tabel di database:
   ```bash
   php artisan migrate
   ```

8. **(Opsional) Menjalankan Seeder (Jika Ada)**

   Jika ada seeder untuk mengisi data awal, jalankan perintah berikut:
   ```bash
   php artisan db:seed
   ```

9. **Instal Dependensi Frontend (Jika Ada)**

   Jika proyek menggunakan Laravel Mix untuk pengelolaan frontend (seperti React, Vue, atau TailwindCSS), instal dependensi frontend:
   ```bash
   npm install
   ```

   Atau jika menggunakan Yarn:
   ```bash
   yarn install
   ```

10. **Kompilasi Sumber Daya Frontend**

    Kompilasi file CSS dan JavaScript:
    ```bash
    npm run dev
    ```

    Untuk kompilasi untuk produksi, gunakan:
    ```bash
    npm run prod
    ```

11. **Jalankan Server Laravel**

    Jalankan server pengembangan Laravel:
    ```bash
    php artisan serve
    ```

    Server akan berjalan di `http://localhost:8000`.

12. **(Opsional) Menjalankan Queue dan Jobs**

    Jika aplikasi menggunakan queue atau jobs, jalankan queue worker:
    ```bash
    php artisan queue:work
    ```

## Akses Aplikasi

Buka browser dan akses aplikasi Anda di `http://localhost:8000`.

## Masalah Umum

Jika Anda menemui masalah, hubungi Pindra.

## Lisensi

Distribusi ini dilisensikan di bawah [Lisensi Anda] - lihat file [LICENSE.md] untuk detail lebih lanjut.
