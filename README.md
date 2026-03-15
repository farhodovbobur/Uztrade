<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## Requirements

- [Docker](https://www.docker.com/) & [Docker Compose](https://docs.docker.com/compose/)
- [Git](https://git-scm.com/)

## Installation

### 1. Clone the repository

```bash
git clone https://github.com/farhodovbobur/Uztrade.git
cd Uztrade
```

### 2. Configure environment

```bash
cp .env.example .env
```

Open the `.env` file and fill in the following values:

```dotenv
DB_HOST=uzte-postgres
DB_PORT=5432
DB_DATABASE=laravel
DB_USERNAME=root
DB_PASSWORD=root
```

### 3. Run with Docker

For detailed Docker instructions, see: [docker/README.md](docker/README.md)

### 4. Install Composer dependencies

```bash
composer install
```

### 5. Generate application key

```bash
php artisan key:generate
```

### 6. Run database migrations

```bash
php artisan migrate
```

### 7. Install Laravel Boost

```bash
php artisan boost:install
```

### 8. Build frontend assets

```bash
npm install
npm run build
```

Or in development mode:

```bash
npm run dev
```

### 9. Open the application

Visit [http://localhost](http://localhost) in your browser.

## Tech Stack

- **PHP** 8.4 + **Laravel** 12
- **PostgreSQL** 18
- **Redis** 7
- **Nginx** 1.28
- **Node.js** 22 + **Vite**
- **Tailwind CSS** 3 + **Alpine.js** 3

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
