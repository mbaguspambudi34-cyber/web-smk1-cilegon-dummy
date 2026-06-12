# SMK Negeri 1 Cilegon Profile Website

## Deskripsi Project

Website ini adalah sistem informasi profil sekolah SMK Negeri 1 Cilegon berbasis Laravel. Website menampilkan profil sekolah, sejarah, visi, misi, tujuan, struktur organisasi, daftar jurusan, background video lokal, dan form kontak.

## Tujuan Project

- Membuat website profil sekolah
- Menampilkan informasi sekolah secara rapi dan profesional
- Menampilkan sejarah sekolah
- Menampilkan visi, misi, dan tujuan sekolah
- Menampilkan struktur organisasi sekolah
- Menampilkan daftar jurusan dari database
- Menyediakan form kontak
- Menampilkan video profil sekolah sebagai background Home
- Menerapkan Laravel, MySQL, Blade, HTML, TailwindCSS, PHP, dan Composer
- Memenuhi tugas UTS Pengembangan Website

## Teknologi yang Digunakan

- Laravel
- PHP
- MySQL
- Blade
- HTML
- TailwindCSS CDN
- Composer

## Fitur Website

- Home dengan background video lokal
- Logo sekolah dari external link
- Profil Sekolah
- Sejarah SMK Negeri 1 Cilegon
- Visi, misi, dan tujuan sekolah
- Struktur organisasi sekolah
- Jurusan / Product
- Contact
- Data jurusan dari database
- Form kontak tersimpan ke database
- Responsive design

## Link Media

Logo sekolah:

```text
https://smkn1cilegon.sch.id/wp-content/uploads/2022/12/LOGO-NAMA-SMKN1-07.png
```

Video background Home:

```text
public/videos/profil.mp4
```

Struktur organisasi:

```text
https://smkn1cilegon.sch.id/wp-content/uploads/2026/05/WhatsApp-Image-2026-05-17-at-23.09.16.jpeg
```

## Struktur Menu

- Home
- Profil Sekolah
- Jurusan
- Contact

## Struktur Database

### Tabel `majors`

- `id`
- `name`
- `category`
- `description`
- `image`
- `created_at`
- `updated_at`

### Tabel `contacts`

- `id`
- `name`
- `email`
- `phone`
- `message`
- `created_at`
- `updated_at`

## Route Website

- `GET /` untuk Home
- `GET /about` untuk Profil Sekolah route lama
- `GET /profil` untuk Profil Sekolah
- `GET /product` untuk halaman Jurusan route lama
- `GET /jurusan` untuk halaman Jurusan
- `GET /contact` untuk Contact
- `POST /contact` untuk menyimpan pesan kontak

## Proses Pembuatan dari Awal sampai Selesai

Bagian ini menjelaskan alur pembuatan website sejak awal sampai website berhasil dijalankan. Project dibuat menggunakan Laravel sebagai framework backend, Blade sebagai template view, MySQL sebagai database, dan TailwindCSS CDN sebagai styling tampilan.

### 1. Persiapan Tools

Tools yang digunakan:

- PHP untuk menjalankan Laravel
- Composer untuk membuat dan mengelola dependency Laravel
- MySQL untuk database
- Browser untuk membuka website
- Text editor untuk mengubah kode project

### 2. Membuat Project Laravel

```bash
composer create-project laravel/laravel web-smk1-cilegon
```

Command tersebut membuat folder project `web-smk1-cilegon` dengan struktur dasar Laravel seperti `app`, `database`, `resources`, `routes`, `config`, dan file `artisan`.

### 3. Masuk ke Folder Project

```bash
cd web-smk1-cilegon
```

### 4. Menjalankan Server Laravel

```bash
php artisan serve
```

Website dibuka melalui:

```text
http://127.0.0.1:8000
```

### 5. Membuat Database MySQL

Nama database:

```text
db_smkn1_cilegon
```

Jika database belum ada, buat dengan SQL:

```sql
CREATE DATABASE db_smkn1_cilegon;
```

### 6. Mengatur File `.env`

```env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=db_smkn1_cilegon
DB_USERNAME=root
DB_PASSWORD=
```

Jika MySQL menggunakan password, isi `DB_PASSWORD` sesuai password lokal.

Setelah mengubah `.env`, bersihkan cache:

```bash
php artisan optimize:clear
php artisan config:clear
```

### 7. Membuat Route Website

Route dibuat di `routes/web.php`.

Route yang digunakan:

- `/` untuk Home
- `/about` dan `/profil` untuk Profil Sekolah
- `/product` dan `/jurusan` untuk Jurusan
- `/contact` untuk Contact
- `POST /contact` untuk menyimpan pesan kontak

### 8. Membuat Controller

```bash
php artisan make:controller PageController
php artisan make:controller ContactController
```

Controller yang digunakan:

- `PageController` untuk menampilkan halaman Home, Profil Sekolah, Jurusan, dan Contact
- `ContactController` untuk memproses form kontak

### 9. Membuat Model dan Migration

```bash
php artisan make:model Major -m
php artisan make:model Contact -m
```

Model yang dibuat:

- `Major` untuk data jurusan
- `Contact` untuk data pesan kontak

Migration yang dibuat:

- tabel `majors`
- tabel `contacts`

### 10. Membuat Tabel `majors`

Tabel `majors` digunakan untuk menyimpan daftar jurusan sekolah.

Kolom:

- `id`
- `name`
- `category`
- `description`
- `image`
- `created_at`
- `updated_at`

### 11. Membuat Tabel `contacts`

Tabel `contacts` digunakan untuk menyimpan pesan dari pengunjung.

Kolom:

- `id`
- `name`
- `email`
- `phone`
- `message`
- `created_at`
- `updated_at`

### 12. Membuat Seeder Jurusan

```bash
php artisan make:seeder MajorSeeder
```

Data jurusan yang dimasukkan:

1. Teknik Elektronika Industri
2. Teknik Mekatronika
3. Teknik Otomasi Industri
4. Teknik Pemesinan
5. Teknik Pengelasan
6. Teknik Kendaraan Ringan
7. Teknik Fabrikasi Logam dan Manufaktur
8. Desain Gambar Mesin
9. Rekayasa Perangkat Lunak
10. Sistem Informatika Jaringan dan Aplikasi

Seeder didaftarkan di `database/seeders/DatabaseSeeder.php`.

### 13. Menjalankan Migration dan Seeder

```bash
php artisan migrate
php artisan db:seed
```

Jika ingin mengulang database dari awal:

```bash
php artisan migrate:fresh --seed
```

Catatan: command tersebut akan menghapus semua tabel dan data lama.

### 14. Membuat Layout Utama

Layout utama dibuat di:

```text
resources/views/layouts/app.blade.php
```

Layout berisi:

- struktur HTML utama
- TailwindCSS CDN
- navbar
- footer
- area konten `@yield('content')`
- responsive menu mobile
- logo sekolah

### 15. Membuat Halaman Website

Halaman dibuat menggunakan Blade:

- `resources/views/home.blade.php`
- `resources/views/about.blade.php`
- `resources/views/product.blade.php`
- `resources/views/contact.blade.php`

### 16. Membuat Halaman Home

Halaman Home berisi:

- hero section dengan background video lokal `public/videos/profil.mp4`
- logo sekolah
- judul SMK Negeri 1 Cilegon
- deskripsi singkat sekolah
- tombol Lihat Jurusan dan Hubungi Kami
- keunggulan sekolah
- profil singkat
- preview jurusan
- call to action

### 17. Membuat Halaman Profil Sekolah

Halaman Profil Sekolah berisi:

- header halaman
- sejarah singkat sekolah
- visi sekolah
- misi sekolah
- tujuan sekolah
- struktur organisasi sekolah

### 18. Membuat Halaman Jurusan / Product

Halaman Jurusan menampilkan data dari tabel `majors`, bukan ditulis manual di Blade. Data diambil melalui `PageController` menggunakan model `Major`.

Setiap card jurusan berisi:

- gambar jurusan
- nama jurusan
- kategori
- deskripsi
- tombol Hubungi Sekolah

### 19. Membuat Halaman Contact

Halaman Contact berisi:

- informasi kontak sekolah
- form kontak
- validasi input
- pesan sukses setelah data berhasil disimpan

Data form disimpan ke tabel `contacts`.

### 20. Styling Website

Styling menggunakan TailwindCSS CDN. Desain dibuat dengan konsep website sekolah modern:

- warna biru tua, biru muda, putih, abu-abu muda, dan aksen kuning emas
- navbar sticky
- card dengan shadow halus
- rounded corner
- gradient header
- spacing rapi
- responsive desktop dan mobile
- tombol dengan hover effect

### 21. Testing Website

Testing dilakukan pada route, view, controller, migration, seeder, dan form contact.

Command testing:

```bash
php artisan route:list
php artisan view:cache
php artisan migrate:status
```

Halaman yang dicek:

- `/`
- `/profil`
- `/about`
- `/product`
- `/jurusan`
- `/contact`

### 22. Hasil Akhir

Website berhasil dibuat sebagai sistem informasi profil sekolah sederhana dengan Laravel dan MySQL. Website memiliki halaman utama, profil sekolah lengkap, daftar jurusan dari database, dan form kontak.

## Cara Menjalankan Project

```bash
composer install
cp .env.example .env
php artisan key:generate
php artisan migrate
php artisan db:seed
php artisan serve
```

Buka website:

```text
http://127.0.0.1:8000
```

## Command Penting

```bash
php artisan serve
php artisan migrate
php artisan db:seed
php artisan optimize:clear
php artisan route:list
php artisan migrate:status
```

## Catatan Database

Jika MySQL menggunakan password, sesuaikan nilai berikut di `.env`:

```env
DB_USERNAME=root
DB_PASSWORD=isi_password_mysql
```

Jika data jurusan belum muncul, jalankan:

```bash
php artisan db:seed
```

## Kesimpulan

Website SMK Negeri 1 Cilegon berhasil dibuat menggunakan Laravel dan MySQL. Website memiliki halaman Home dengan background video lokal, halaman Profil Sekolah lengkap dengan sejarah, visi, misi, tujuan, dan struktur organisasi, halaman Jurusan dari database, serta halaman Contact.

## Identitas Pembuat

Nama Kelompok: Muhammad Bagus Pambudi
Kelas: RKS 25

Mata Kuliah: Pemprograman Web
