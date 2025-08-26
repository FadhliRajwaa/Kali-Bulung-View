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



# Install Nginx and Supervisor
RUN apt-get update \
    && apt-get install -y nginx supervisor \
    && rm -rf /var/lib/apt/lists/*

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


# Copy Nginx config
COPY nginx.conf /etc/nginx/nginx.conf

# Copy Supervisor config
COPY supervisord.conf /etc/supervisor/conf.d/supervisord.conf

EXPOSE 80

CMD ["/usr/bin/supervisord"]