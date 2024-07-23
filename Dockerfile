FROM php:8.3-apache

WORKDIR /var/www

# Configura Apache
RUN a2enmod rewrite
# Establecer permisos
RUN chown -R www-data:www-data /var/www

RUN sed -ri -e 's!/var/www/html!/var/www/public!g' /etc/apache2/sites-available/000-default.conf
RUN sed -ri -e 's!/var/www/!/var/www/public!g' /etc/apache2/apache2.conf /etc/apache2/conf-available/*.conf

# Instalación de paquetes adicionales
RUN apt-get update && apt-get install -y \
    build-essential \
    libzip-dev \
    libpng-dev \
    libjpeg62-turbo-dev \
    libfreetype6-dev \
    libonig-dev \
    locales \
    zip \
    jpegoptim optipng pngquant gifsicle \
    vim \
    git \
    curl \
    ffmpeg \
    libpq-dev

# Extensiones PHP
RUN docker-php-ext-install pdo pdo_pgsql pgsql zip exif pcntl bcmath
RUN echo "max_input_vars = 5000" >> /usr/local/etc/php/php.ini

# Instalación de Composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Copia el código fuente y el archivo .env
COPY . .
RUN rm -rf /app/vendor
RUN rm -rf /app/composer.lock
RUN composer install
COPY .env.example .env
RUN mkdir -p /app/storage/logs

ENV APP_DEBUG=false
ENV APP_KEY=base64:WSrr+SLrQB3xUmWnNHaeug02LVNX+V5FtN9na9nN8vQ=
ENV APP_URL=https://inter-rapidisimo.onrender.com
ENV ASSET_URL=https://laravel-sail-base-1.onrender.com
ENV DB_URL=postgresql://jhossweb:7d1db0uPHmeMSS0d68tm5EZAWWlMlBFN@dpg-cqfioi2ju9rs73btqfhg-a/inter_rapidisimo

# Comando para iniciar el servidor web y aplicar migraciones
RUN php artisan migrate:fresh --seed
CMD php artisan serve --host=0.0.0.0 --port=8000

EXPOSE 8000