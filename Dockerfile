# Usa la imagen oficial de PHP con FPM
FROM php:8.2-fpm

# Instala extensiones necesarias para Laravel
RUN apt-get update && apt-get install -y \
    git \
    curl \
    libpng-dev \
    libonig-dev \
    libxml2-dev \
    zip \
    unzip \
    && docker-php-ext-install pdo_mysql mbstring exif pcntl bcmath gd

# Instala Composer
COPY --from=composer:2.6 /usr/bin/composer /usr/bin/composer

# Configura el directorio de trabajo
WORKDIR /var/www

# Copia los archivos del proyecto Laravel al contenedor
COPY . .

# Establece permisos para Laravel
RUN chown -R www-data:www-data /var/www \
    && chmod -R 755 /var/www/storage

# Instala las dependencias de Laravel
RUN composer install

# Expone el puerto para Nginx
EXPOSE 9000
EXPOSE 80
EXPOSE 8080

# Ejecuta el servidor de PHP-FPM
CMD ["php", "artisan", "serve", "--host=0.0.0.0", "--port=8000"]
