# UASPRAKPBW_KLP2

# ☕ CaféRate

<div align="center">

![Laravel](https://img.shields.io/badge/Laravel-11-red?style=for-the-badge\&logo=laravel)
![PHP](https://img.shields.io/badge/PHP-8.4+-blue?style=for-the-badge\&logo=php)
![MySQL](https://img.shields.io/badge/MySQL-Database-orange?style=for-the-badge\&logo=mysql)
![Tailwind CSS](https://img.shields.io/badge/TailwindCSS-Frontend-06B6D4?style=for-the-badge\&logo=tailwindcss)

### Sistem Review Café Berbasis Web

Temukan café terbaik, berikan ulasan, unggah foto, dan bantu pengguna lain menemukan tempat nongkrong yang sesuai.

</div>

---

##  Tentang Project

**CaféRate** adalah aplikasi web yang memungkinkan pengguna untuk:

* Menemukan café berdasarkan pencarian dan filter.
* Memberikan rating dan ulasan terhadap café.
* Mengunggah foto pengalaman saat berkunjung.
* Melihat rata-rata penilaian dari pengguna lain.
* Membantu pengguna memilih café terbaik berdasarkan review komunitas.

Project ini dikembangkan menggunakan:

* Laravel 11
* Blade Template Engine
* Tailwind CSS
* MySQL Database
* Laravel Storage

---

#  Fitur Utama

##  User

* Registrasi akun
* Login & Logout
* Melihat daftar café
* Pencarian dan filter café
* Detail café
* Memberikan review
* Upload foto review
* Melihat review pengguna lain

##  Admin

* Dashboard statistik
* CRUD Café
* Moderasi review
* Manajemen data café
* Monitoring aktivitas review

---

#  Tampilan Aplikasi

Tambahkan screenshot project pada folder:

```text
public/screenshots/
```

Lalu tampilkan:

```md
![Homepage](public/screenshots/homepage.png)
![Cafe Detail](public/screenshots/detail.png)
![Admin Dashboard](public/screenshots/dashboard.png)
```

---

#  Instalasi

## 1. Clone Repository

```bash
git clone https://github.com/username/caferate.git
cd caferate
```

---

## 2. Install Dependency

```bash
composer install
```

---

## 3. Setup Environment

Buat file `.env`

```bash
cp .env.example .env
```

Generate application key:

```bash
php artisan key:generate
```

---

## 4. Konfigurasi Database

Buka file `.env`

```env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=caferate
DB_USERNAME=root
DB_PASSWORD=
```

---

## 5. Buat Database

Masuk ke phpMyAdmin atau MySQL lalu buat database:

```sql
CREATE DATABASE caferate;
```

---

## 6. Jalankan Migrasi dan Seeder

```bash
php artisan migrate --seed
```

---

## 7. Buat Storage Link

```bash
php artisan storage:link
```

---

## 8. Jalankan Aplikasi

```bash
php artisan serve
```

Akses melalui:

```text
http://localhost:8000
```

---

#  Akun Default

## Admin

| Email                                           | Password |
| ----------------------------------------------- | -------- |
| [admin@caferate.com](mailto:admin@caferate.com) | admin123 |

## User

| Email                                         | Password |
| --------------------------------------------- | -------- |
| [user@caferate.com](mailto:user@caferate.com) | user123  |

---

#  Struktur Project

```text
caferate/
│
├── app/
│   ├── Http/
│   │   ├── Controllers/
│   │   └── Middleware/
│   └── Models/
│
├── database/
│   ├── migrations/
│   └── seeders/
│
├── public/
│
├── resources/
│   └── views/
│
├── routes/
│   └── web.php
│
├── storage/
│
└── README.md
```

---

#  Teknologi yang Digunakan

| Teknologi    | Fungsi               |
| ------------ | -------------------- |
| Laravel 11   | Backend Framework    |
| Blade        | Template Engine      |
| Tailwind CSS | Styling UI           |
| MySQL        | Database             |
| PHP          | Server Side Language |

---


