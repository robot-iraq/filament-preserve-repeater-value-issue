## Setup

1- Install dependencies::
```bash
composer install
```
2- Copy environment file:
```bash
cp .env.example .env
```
3- Generate application key:
```bash
php artisan key:generate
```
4-Create the database and run migrations:
```bash
php artisan migrate --seed
```
## Steps to Reproduce
- visit '<b>admin/items/create</b>'
- fill the form and press '<b>Create & create another</b>' button
