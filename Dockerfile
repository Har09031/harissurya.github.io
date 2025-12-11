# -------------------------------------------------------
# Stage 1 — Build frontend assets using Node
# -------------------------------------------------------
FROM node:20 AS frontend
WORKDIR /app

COPY package*.json ./
RUN npm install

COPY . .
RUN npm run build


# -------------------------------------------------------
# Stage 2 — Laravel + FrankenPHP
# -------------------------------------------------------
FROM dunglas/frankenphp:1-php8.4

WORKDIR /app

# Copy seluruh project
COPY . .

# Copy hasil build Vite dari stage 1
COPY --from=frontend /app/public/build ./public/build

# Install dependency sistem
RUN apt-get update && apt-get install -y \
    unzip \
    git \
    libzip-dev \
    libpng-dev \
    libjpeg-dev \
    libfreetype6-dev \
    libwebp-dev \
    libicu-dev \
    libonig-dev \
    mariadb-client \
    && docker-php-ext-configure gd --with-freetype --with-jpeg --with-webp \
    && docker-php-ext-install zip gd intl pdo pdo_mysql

RUN docker-php-ext-install pcntl

# Install Composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

# Install Laravel dependencies
RUN composer install --no-dev --optimize-autoloader

# Install Octane
RUN composer require laravel/octane \
    && php artisan octane:install --server=frankenphp

# Generate app key
RUN php artisan key:generate --force

# Permission
RUN chown -R www-data:www-data storage bootstrap/cache \
    && chmod -R 775 storage bootstrap/cache

# Install Caddy
COPY Caddyfile /etc/caddy/Caddyfile

# Copy entrypoint
COPY docker/entrypoint.sh /entrypoint.sh
RUN chmod +x /entrypoint.sh

EXPOSE 8000

ENTRYPOINT ["/entrypoint.sh"]
