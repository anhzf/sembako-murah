<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## Anggota Kelompok

| Nama                    | NIM      |
| ----------------------- | -------- |
| Alvin Kurniawan         | K3519009 |
| Alwan Nuha Zaky Fadhila | K3519010 |
| Hamid Yahya             | K3519035 |
| Ramadhan Fahmi Habibi   | K3519070 |

## Instalasi

### Requirements
- PHP >= 7.3
- Composer >= 2
- NodeJS >= 12
- NPM >= 6

### Persiapan
- Clone repository ini atau extract zip projek ini
- Copy `.env.example` menjadi `.env` kemudian isikan field yang anda perlukan
- Lakukan command berikut (bisa dilakukan secara parallel)
  ```bash
  npm install
  composer install
  ```
- Lakukan command berikut secara berurutan setelah kedua command diatas selesai
  ```bash
  php artisan key:generate
  php artisan migrate
  php artisan storage:link
  npm run production
  ```
- Untuk meng-generate data dummy ke database lakukan command berikut (opsional)
  ```bash
  php artisan db:seed
  ```
  Untuk userpass akun admin dapat dilihat di `database/seeders/AdminSeeder.php`

### Menjalankan server
Untuk menjalankan server lakukan command berikut:
```bash
php artisan serve
```
## Functional  Requirement
- Admin toko diberikan akses ke seluruh aplikasi agar bisa mengelola aplikasi
- User hanya dapat mengakses beberapa fitur yang ada.

## Critical Assumption
- Dengan adanya Web Sembako Murah akan membuat pelanggan jadi lebih mudah untuk memesan bahan panganan pokok di mana saja dan kapan saja.
- Pengguna web adalah seorang user/pembeli dan juga seorang admin toko/penjual.
- 

## Flowchart Diagram

- Login Flowchart

<p align="center"> <img src="/doc/login.JPG"></img> </p>

- Register Flowchart

<p align="center"> <img src="/doc/register.JPG"></img> </p>

- Buy Flowchart

- 

## Division of Tasks

| Nama                    | Division      | Task                                                                           |
| ----------------------- | ------------- | ------------------------------------------------------------------------------ |
| Alvin Kurniawan         | Documentation | Make a good documentation                                                      |
| Alwan Nuha Zaky Fadhila | Backend Dev   | create web application logic on the server and integrate it with the front end |
| Hamid Yahya             | Designer      | Design good picture and logo                                                   |
| Ramadhan Fahmi Habibi   | Frontend Dev  | Design good viewpage for customer and store admin                              |
