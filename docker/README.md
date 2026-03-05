# Docker bilan ishga tushirish

## 1. Birinchi marta ishga tushirish

```bash
# Konteynerlarni build qilish va ishga tushirish
docker compose up -d --build

# Permissionlarni to'g'rilash (bir marta)
docker compose exec -u root uzte-app sh -c \
  "chown -R www-data:www-data /var/www/storage /var/www/bootstrap/cache && chmod -R 775 /var/www/storage /var/www/bootstrap/cache"

# Database tablalarini yaratish
docker compose exec uzte-app php artisan migrate --force

# Storage link yaratish
docker compose exec uzte-app php artisan storage:link

# Production cache yaratish
docker compose exec uzte-app php artisan config:cache
docker compose exec uzte-app php artisan route:cache
docker compose exec uzte-app php artisan view:cache
```

## 2. Yangi deploy (kod yangilanganda)

```bash
# Konteynerlarni qayta build qilish
docker compose up -d --build

# Yangi migratsiyalarni ishlatish
docker compose exec uzte-app php artisan migrate --force

# Cacheni yangilash
docker compose exec uzte-app php artisan config:cache
docker compose exec uzte-app php artisan route:cache
docker compose exec uzte-app php artisan view:cache
```

## 3. Foydali buyruqlar

```bash
# Konteynerlar holatini ko'rish
docker compose ps

# PHP konteyner loglarini ko'rish
docker compose logs uzte-app

# Barcha loglarni real-time ko'rish
docker compose logs -f

# Konteynerlarni to'xtatish
docker compose down

# Konteynerlarni to'xtatish + database ni o'chirish
docker compose down -v
```

## 4. Xatolik bo'lsa

```bash
# Barcha cacheni tozalash
docker compose exec uzte-app php artisan optimize:clear

# Permissionlarni qayta to'g'rilash
docker compose exec -u root uzte-app sh -c \
  "chown -R www-data:www-data /var/www/storage /var/www/bootstrap/cache && chmod -R 775 /var/www/storage /var/www/bootstrap/cache"

# Konteyner ichiga kirish (debug uchun)
docker compose exec uzte-app sh
```

## Servicelar

| Service | Port | Tavsif |
|---------|------|--------|
| uzte-nginx | 8090 | Web server |
| uzte-app | 9000 | PHP-FPM (ichki) |
| uzte-postgres | 5432 | PostgreSQL |
| uzte-pgadmin | 5050 | pgAdmin panel |
| uzte-redis | 6379 | Redis cache |
| uzte-node | 5173 | Vite dev server |
