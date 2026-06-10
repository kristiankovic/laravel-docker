FROM php:8.4-fpm

# Argumentos para UID/GID dinámicos
ARG UID=1000
ARG GID=1000

# Instalar extensiones necesarias
RUN apt-get update && apt-get install -y \
    git unzip libpng-dev libonig-dev libxml2-dev zip curl \
    && docker-php-ext-install pdo_mysql mbstring exif pcntl bcmath gd

# Instalar Composer globalmente
COPY --from=composer:2 /usr/bin/composer /usr/bin/composer

# Instalar nodejs
# RUN apt-get install -y nodejs npm vamos a probar usando bun nada mas a ver


# Crear usuario con UID/GID del host
RUN groupadd -g ${GID} laravel && \
    useradd -u ${UID} -g ${GID} -m laravel





# Dar permisos al webroot
RUN chown -R laravel:laravel /var/www/html

# Cambiar a usuario no root
USER laravel

RUN curl -fsSL https://bun.com/install | bash

ENV BUN_INSTALL=/home/laravel/.bun
ENV PATH="${BUN_INSTALL}/bin:${PATH}"

WORKDIR /var/www/html





EXPOSE 9000

#CMD ["/usr/local/bin/astro.sh"]