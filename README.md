

## Kentest - setup test

Laravel 8.75
PHP 7.4.32

### setup env
- cp .env.example .env
-- update database info
### run 
- php artisan key:generate
- php artisan config:cache
- php artisan migrate:refresh --seed

- php artisan serve
 (web will run on http://localhost:8000)