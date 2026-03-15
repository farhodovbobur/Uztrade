# Running with Docker

## 1. First-time setup

```bash
# Build and start containers
docker compose up -d --build

# Fix permissions (once)
docker compose exec -u root uzte-app sh -c \
  "chown -R www-data:www-data /var/www/storage /var/www/bootstrap/cache && chmod -R 775 /var/www/storage /var/www/bootstrap/cache"

# Run database migrations
docker compose exec uzte-app php artisan migrate --force

# Create storage symlink
docker compose exec uzte-app php artisan storage:link

# Build production cache
docker compose exec uzte-app php artisan config:cache
docker compose exec uzte-app php artisan route:cache
docker compose exec uzte-app php artisan view:cache
```

## 2. New deploy (when code is updated)

```bash
# Rebuild containers
docker compose up -d --build

# Run new migrations
docker compose exec uzte-app php artisan migrate --force

# Refresh cache
docker compose exec uzte-app php artisan config:cache
docker compose exec uzte-app php artisan route:cache
docker compose exec uzte-app php artisan view:cache
```

## 3. Useful commands

```bash
# Check container status
docker compose ps

# View PHP container logs
docker compose logs uzte-app

# View all logs in real-time
docker compose logs -f

# Stop containers
docker compose down

# Stop containers and remove database volumes
docker compose down -v
```

## 4. Troubleshooting

```bash
# Clear all caches
docker compose exec uzte-app php artisan optimize:clear

# Fix permissions
docker compose exec -u root uzte-app sh -c \
  "chown -R www-data:www-data /var/www/storage /var/www/bootstrap/cache && chmod -R 775 /var/www/storage /var/www/bootstrap/cache"

# Enter container shell (for debugging)
docker compose exec uzte-app sh
```

## Services

| Service | Port | Description |
|---------|------|-------------|
| uzte-nginx | 8090 | Web server |
| uzte-app | 9000 | PHP-FPM (internal) |
| uzte-postgres | 5432 | PostgreSQL |
| uzte-pgadmin | 5050 | pgAdmin panel |
| uzte-redis | 6379 | Redis cache |
| uzte-node | 5173 | Vite dev server |
