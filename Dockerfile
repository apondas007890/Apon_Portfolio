FROM php:8.2-apache

# 1) system deps + php extensions
RUN apt-get update && apt-get install -y \
    git unzip libpng-dev libonig-dev libxml2-dev \
    && docker-php-ext-install pdo pdo_mysql

# 2) enable rewrite for Laravel
RUN a2enmod rewrite

# 3) app location
WORKDIR /var/www/html

# 4) copy project
COPY . /var/www/html

# 5) install composer deps
COPY --from=composer:2 /usr/bin/composer /usr/bin/composer
RUN composer install --no-dev --optimize-autoloader

# 6) perms for storage + cache
RUN chown -R www-data:www-data /var/www/html/storage /var/www/html/bootstrap/cache \
    && chmod -R 775 /var/www/html/storage /var/www/html/bootstrap/cache

# 7) make apache serve /public
RUN sed -i 's|/var/www/html|/var/www/html/public|g' /etc/apache2/sites-available/000-default.conf

# 8) expose Render's port (we'll actually bind to $PORT at runtime)
EXPOSE 10000

# 9) start apache on Render's PORT (fall back to 10000 locally)
CMD sed -i "s/Listen 80/Listen ${PORT:-10000}/" /etc/apache2/ports.conf && \
    sed -i "s/:80>/:${PORT:-10000}>/" /etc/apache2/sites-available/000-default.conf && \
    apache2-foreground
