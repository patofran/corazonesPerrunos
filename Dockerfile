# Usar una imagen oficial de PHP con soporte para Apache
FROM php:8.1-apache

# Instalar dependencias necesarias
RUN apt-get update && apt-get install -y \
    libpng-dev \
    libonig-dev \
    libjpeg-dev \
    libfreetype6-dev \
    zip \
    unzip \
    git \
    libxml2-dev \
    && docker-php-ext-configure gd --with-freetype --with-jpeg \
    && docker-php-ext-install pdo_mysql mbstring gd xml \
    && a2enmod rewrite

# Copiar los archivos del proyecto a la imagen Docker
COPY . /

# Establecer el directorio de trabajo
WORKDIR /

# Instalar Composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

# Instalar las dependencias de Laravel
#RUN composer install --optimize-autoloader --no-dev

# Dar permisos adecuados
RUN chown -R www-data:www-data / \
    && chmod -R 775 //storage //bootstrap/cache

# Exponer el puerto 80
EXPOSE 80

# Comando para iniciar el servidor de Apache
CMD ["apache2-foreground"]

