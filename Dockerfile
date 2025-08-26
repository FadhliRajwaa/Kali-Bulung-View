# Stage 1 - Build Frontend (Vite)
FROM node:18 AS frontend
WORKDIR /app
COPY package*.json ./
RUN npm install
COPY . .
RUN npm run build

# Stage 2 - Backend (Laravel + PHP + Composer + Caddy)
FROM php:8.2-fpm

# Install system dependencies
RUN apt-get update && apt-get install -y \
    git curl unzip libpng-dev libonig-dev libxml2-dev libzip-dev zip \
    libcurl4-openssl-dev pkg-config libssl-dev \
    && docker-php-ext-install pdo pdo_mysql mbstring zip gd

# Install Composer
COPY --from=composer:2 /usr/bin/composer /usr/bin/composer

# Install Caddy web server
RUN curl -fsSL https://get.caddyserver.com | bash -s personal

WORKDIR /var/www

# Copy app files
COPY . .

# Copy built frontend from Stage 1 (ke public/build)
COPY --from=frontend /app/public/build ./public/build

# Set permissions
RUN chown -R www-data:www-data /var/www/storage /var/www/bootstrap/cache

# Install PHP dependencies
RUN composer install --no-dev --optimize-autoloader

# Laravel setup (cache config, route, view)
RUN php artisan config:cache && \
    php artisan route:cache && \
    php artisan view:cache

# Copy Caddyfile
COPY Caddyfile /etc/caddy/Caddyfile

EXPOSE 8080

CMD php-fpm & caddy run --config /etc/caddy/Caddyfile --adapter caddyfile