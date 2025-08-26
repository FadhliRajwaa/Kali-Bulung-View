# Stage 1 - Build Frontend (Vite)
FROM node:18 AS frontend
WORKDIR /app
COPY package*.json ./
RUN npm install
COPY . .
RUN npm run build

# Stage 2 - Backend (Laravel + PHP + Composer)
FROM php:8.2-fpm

# Install system dependencies
RUN apt-get update && apt-get install -y \
    git curl unzip libpng-dev libonig-dev libxml2-dev libzip-dev zip \
    npm nodejs \
    && docker-php-ext-install pdo pdo_mysql mbstring zip gd

# Install Composer
COPY --from=composer:2 /usr/bin/composer /usr/bin/composer

WORKDIR /var/www

# Copy app files
COPY . .

# Copy built frontend from Stage 1 (HARUS ke public/build)
COPY --from=frontend /app/public/build ./public/build

# Install PHP dependencies
RUN composer install --no-dev --optimize-autoloader

# Set permissions
RUN chown -R www-data:www-data /var/www/storage /var/www/bootstrap/cache

# Laravel setup (cache config, route, view)
RUN php artisan config:cache && \
    php artisan route:cache && \
    php artisan view:cache

# Expose port 8080 for Render
EXPOSE 8080

# Use Laravel's built-in server for simplicity (not optimal for heavy production)
CMD ["php", "artisan", "serve", "--host=0.0.0.0", "--port=8080"]