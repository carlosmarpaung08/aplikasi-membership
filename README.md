# 🚀 Aplikasi Membership Premium (Laravel 10)

Aplikasi membership sederhana yang memungkinkan pengguna **mendaftar dan masuk menggunakan akun media sosial (Google & Facebook) atau kredensial manual**, serta mengakses konten premium (artikel & video) berdasarkan tingkatan membership mereka. Dilengkapi dengan **panel admin** untuk manajemen pengguna dan tipe membership.

---

## ✨ Fitur Utama

### 🔑 Otentikasi Fleksibel

* **Login & Register dengan Google**
  Integrasi penuh menggunakan Google OAuth.
* **Login & Register dengan Facebook**
  Integrasi penuh menggunakan Facebook OAuth.
* **Login & Register Manual**
  Sistem pendaftaran dan login tradisional dengan email & kata sandi.

### 💎 Sistem Membership Berjenjang

* **Tipe A**
  Akses ke 3 artikel dan 3 video dasar.
* **Tipe B**
  Akses ke 10 artikel dan 10 video menengah.
* **Tipe C (Premium)**
  Akses tak terbatas ke seluruh artikel dan video.

### 🔒 Pembatasan Konten Dinamis

Konten artikel dan video di halaman daftar disaring dan ditampilkan berdasarkan tipe membership pengguna. **Upaya akses konten yang tidak diizinkan akan memunculkan peringatan.**

### 🛠️ Panel Admin Khusus

* Halaman manajemen pengguna yang hanya dapat diakses oleh admin (`is_admin: true`).
* Admin dapat dengan mudah mengubah tipe membership (A, B, C) untuk setiap pengguna.

### 🎨 User Interface Modern

Dibangun dengan **Tailwind CSS** untuk tampilan yang responsif dan estetis.

---

## 🛠️ Teknologi yang Digunakan

* **Backend:** PHP 8.2+ dengan Laravel 10 (termasuk Laravel Socialite untuk OAuth)
* **Frontend:** Blade Templates, Alpine.js, Tailwind CSS 3
* **Database:** MySQL (dapat dikonfigurasi)
* **Manajemen Paket:** Composer (PHP), NPM (Node.js)

---

## 🚀 Cara Menjalankan Proyek Secara Lokal

Ikuti langkah-langkah berikut untuk mengatur dan menjalankan proyek di mesin lokal Anda:

### 1. Clone Repositori

```bash
git clone https://github.com/YOUR_USERNAME/aplikasi-membership.git
cd aplikasi-membership
```

> Ganti `YOUR_USERNAME` dengan nama pengguna GitHub Anda.

### 2. Instal Dependensi PHP

```bash
composer install
```

### 3. Instal Dependensi JavaScript & Kompilasi Aset

```bash
npm install
npm run dev
```

### 4. Konfigurasi Environment (.env)

Buat salinan file `.env.example` menjadi `.env`:

```bash
cp .env.example .env
# Untuk Windows:
copy .env.example .env
```

### 5. Buat Application Key

```bash
php artisan key:generate
```

### 6. Konfigurasi Database

Buka file `.env` dan perbarui detail koneksi database Anda (misalnya MySQL). Buat database baru di sistem Anda.

```env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=aplikasi_membership_db
DB_USERNAME=root
DB_PASSWORD=
```

### 7. Konfigurasi Google & Facebook OAuth

Dapatkan kredensial (Client ID, Client Secret, Redirect URI) dari **Google Cloud Console** dan **Meta for Developers**, lalu tambahkan ke `.env`:

```env
GOOGLE_CLIENT_ID=YOUR_GOOGLE_CLIENT_ID
GOOGLE_CLIENT_SECRET=YOUR_GOOGLE_CLIENT_SECRET
GOOGLE_REDIRECT_URI=http://localhost:8000/auth/google/callback

FACEBOOK_CLIENT_ID=YOUR_FACEBOOK_APP_ID
FACEBOOK_CLIENT_SECRET=YOUR_FACEBOOK_APP_SECRET
FACEBOOK_REDIRECT_URI=http://localhost:8000/auth/facebook/callback
```

### 8. Jalankan Migrasi Database & Seeder

```bash
php artisan migrate --seed
php artisan db:seed --class=AdminUserSeeder
```

> Ini akan membuat tabel dan menambahkan akun admin: `admin@example.com` dengan password `password`.

### 9. Jalankan Server Lokal

```bash
php artisan serve
```

### 10. Akses Aplikasi

Buka browser dan kunjungi [http://127.0.0.1:8000/](http://127.0.0.1:8000/).

---

## 🔒 Akun Pengujian

### 👑 Akun Admin

* **Email:** [admin@gmail.com](mailto:admin@gmail.com)
* **Password:** password

### 👤 Pengguna Biasa

Anda dapat mendaftar melalui proses manual atau menggunakan Google/Facebook login. **Secara default**, mereka akan mendapatkan Membership **Tipe A**. Anda bisa mengubah tipe membership mereka melalui panel admin.

---

## 🤝 Kontribusi

Saran dan kontribusi sangat diterima! Jika Anda menemukan bug atau memiliki ide untuk fitur baru, jangan ragu untuk membuka **issue** atau mengirimkan **pull request**.

---

Jika ingin menambahkan badge build, license, atau screenshot aplikasi untuk tampilan portfolio profesional, beri tahu saya untuk menyiapkannya selanjutnya.
