# Usa una imagen base oficial de PHP con extensiones necesarias para Laravel
FROM php:8.1-fpm

# Instala dependencias del sistema
RUN apt-get update && apt-get install -y \
    build-essential \
    libpng-dev \
    libjpeg-dev \
    libfreetype6-dev \
    locales \
    zip \
    jpegoptim optipng pngquant gifsicle \
    vim \
    unzip \
    git \
    curl

# Instala extensiones de PHP necesarias
RUN docker-php-ext-install pdo pdo_mysql mbstring exif pcntl bcmath gd

# Instala Composer
COPY --from=composer:2.1 /usr/bin/composer /usr/bin/composer

# Establece el directorio de trabajo
WORKDIR /var/www

# Copia el archivo composer.json y composer.lock
COPY composer.json composer.lock ./

# Instala las dependencias de Composer
RUN composer install --no-scripts --no-autoloader

# Copia el resto de la aplicación
COPY . .

# Genera la autoload de Composer
RUN composer dump-autoload --optimize

# Copia el archivo de configuración de PHP
COPY .docker/php.ini /usr/local/etc/php/conf.d/php.ini

# Otorga permisos a la carpeta de almacenamiento
RUN chown -R www-data:www-data /var/www/storage

# Expone el puerto 9000 y ejecuta php-fpm
EXPOSE 9000
CMD ["php-fpm"]
