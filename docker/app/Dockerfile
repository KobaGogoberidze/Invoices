FROM php:8.1-fpm

ARG USER
ARG GROUP
ARG USER_ID
ARG GROUP_ID

WORKDIR /var/www

RUN apt-get update && apt-get install -y \
    git \
    zip \
    unzip \
    curl \
    vim \
    libicu-dev

RUN curl -sL https://deb.nodesource.com/setup_19.x | bash \
    && apt-get install nodejs -y

RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

RUN docker-php-ext-configure intl
RUN docker-php-ext-install pdo pdo_mysql intl

RUN pecl install xdebug \
    && docker-php-ext-enable xdebug

COPY xdebug.ini "${PHP_INI_DIR}/conf.d"

RUN groupadd --force --gid $GROUP_ID $GROUP
RUN useradd --create-home --shell /bin/bash --gid $GROUP_ID --uid $USER_ID $USER
RUN chown $USER:$GROUP /var/www

USER $USER