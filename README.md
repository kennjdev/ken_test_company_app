

## Kentest - setup test

### setup env
- cp .env.example .env
-- update database connection info
### setup 
- php artisan config:cache
- php artisan migrate:refresh --seed

- php artisan serve