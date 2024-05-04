# Steps to reproduce

```
composer install
```
```
php artisan migrate --seed
```
```
php artisan test:update-or-create
```
```
php artisan db:seed --class=TestUpdateOrCreateSeeder
```
