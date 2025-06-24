<p align="center">
    <a href="https://laravel.com" target="_blank">
        <img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo">
    </a>
</p>

<p align="center">
    <a href="https://github.com/fikronmaulana/portfolio-app/actions">
        <img src="https://github.com/fikronmaulana/portfolio-app/workflows/tests/badge.svg" alt="Build Status">
    </a>
    <a href="https://packagist.org/packages/fikronmaulana/portfolio-app">
        <img src="https://img.shields.io/packagist/dt/fikronmaulana/portfolio-app" alt="Total Downloads">
    </a>
    <a href="https://packagist.org/packages/fikronmaulana/portfolio-app">
        <img src="https://img.shields.io/packagist/v/fikronmaulana/portfolio-app" alt="Latest Stable Version">
    </a>
    <a href="https://opensource.org/licenses/MIT">
        <img src="https://img.shields.io/packagist/l/fikronmaulana/portfolio-app" alt="License">
    </a>
</p>

## 🎨 Portfolio App – Fikron Maulana

**Portfolio App** adalah aplikasi web berbasis Laravel yang dikembangkan untuk menampilkan portofolio pribadi milik **Fikron Maulana**. Aplikasi ini menampilkan informasi proyek, pengalaman, dan kemampuan secara profesional dan terstruktur.

### ✨ Fitur Utama

- CRUD Proyek Portofolio (judul, deskripsi, gambar, teknologi)
- Halaman Admin dengan autentikasi
- Formulir kontak dengan pengiriman email
- Desain responsif berbasis Tailwind CSS
- SEO-friendly untuk tampilan publik
- Routing elegan dengan Laravel
- Penyimpanan gambar menggunakan Laravel Filesystem

### 🚀 Instalasi

```bash
git clone https://github.com/fikronmaulana/portfolio-app.git
cd portfolio-app
composer install
cp .env.example .env
php artisan key:generate
php artisan migrate --seed
npm install && npm run dev
php artisan serve
