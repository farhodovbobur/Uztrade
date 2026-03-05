FROM php:8.4-fpm

ARG USER_ID=1000

WORKDIR /var/www

# -------------------------------------------------------
# 1. System dependencies + PHP extensions (single layer)
# -------------------------------------------------------
RUN apt-get update && apt-get install -y --no-install-recommends \
    libpng-dev libjpeg62-turbo-dev libfreetype6-dev libwebp-dev \
    libpq-dev \
    libzip-dev \
    libonig-dev \
    libsqlite3-dev \
    libcurl4-openssl-dev libxml2-dev \
    libicu-dev \
    zip unzip git curl \
    && docker-php-ext-configure gd --with-jpeg --with-freetype --with-webp \
    && docker-php-ext-install -j$(nproc) \
        pdo \
        pdo_pgsql \
        pdo_sqlite \
        pgsql \
        mbstring \
        zip \
        exif \
        intl \
        xml \
        bcmath \
        opcache \
        gd \
        posix \
        sockets \
    && docker-php-ext-configure pcntl --enable-pcntl \
    && docker-php-ext-install -j$(nproc) pcntl \
    && pecl install redis \
    && docker-php-ext-enable redis \
    && apt-get clean \
    && rm -rf /var/lib/apt/lists/* /tmp/* /var/tmp/*

# -------------------------------------------------------
# 2. Composer (multi-stage copy)
# -------------------------------------------------------
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# -------------------------------------------------------
# 3. PHP configuration
# -------------------------------------------------------
COPY docker/php/php.ini        $PHP_INI_DIR/conf.d/99-custom.ini
COPY docker/php/opcache.ini    $PHP_INI_DIR/conf.d/10-opcache.ini
COPY docker/php/www.conf       /usr/local/etc/php-fpm.d/zz-www.conf

# -------------------------------------------------------
# 4. User setup (host permission sync)
# -------------------------------------------------------
RUN usermod -u $USER_ID www-data \
    && groupmod -g $USER_ID www-data

# -------------------------------------------------------
# 5. Production: copy app + install dependencies
#    (development da volume mount qilasiz, bu qatlamlar
#     cache dan olinadi va qayta ishlamaydi)
# -------------------------------------------------------
COPY --chown=www-data:www-data composer.json composer.lock ./
RUN composer install --no-dev --no-scripts --no-autoloader --prefer-dist

COPY --chown=www-data:www-data . .
RUN composer dump-autoload --optimize

USER www-data

EXPOSE 9000
CMD ["php-fpm"]
