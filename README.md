<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## About the task

Backend:
Create three types of user roles use database Seeder
1) Admin: Functionalities.
a) Login
b) Add/edit/delete Vendors
c) Manage Products (Add/edit/delete)
d) Manage Stock(Add/edit/delete)
2) Vendor: Functionalities.
a) Login
b) Manage products (Vendor specific)
c) Manage Stock
Frontend:
3) Customer: Functionalities.
a) Register/Login
b) Product List
c) Add to cart and cart listing page
Note: Need responsive design. Technology : Laravel ,mysql


## Installation

1. Run git clone 'link projer github'
2. Run composer install
3. Run cp .env.example .env or copy .env.example .env
4. Run php artisan key:generate
5. Run npm install $$ npm run dev
6. Run php artisan migrate
7. Run php artisan db:seed
8. Run php artisan serve


## User Credentials

1. Admin
   email: admin@example.com
   password: password-admin
2. Vendor
   email: vendor@example.com
   password: password-vendor
3. Customer
   email: customer@example.com
   password: password-customer
