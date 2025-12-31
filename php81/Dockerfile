FROM php:8.1-fpm

# 替换 Debian 软件源为国内镜像（根据 PHP 镜像的基础版本选择）
RUN set -eux; \
    if [ -f /etc/apt/sources.list ]; then \
        sed -i 's|deb.debian.org|mirrors.aliyun.com|g' /etc/apt/sources.list; \
        sed -i 's|security.debian.org|mirrors.aliyun.com|g' /etc/apt/sources.list; \
    elif [ -f /etc/apt/sources.list.d/debian.sources ]; then \
        sed -i 's|deb.debian.org|mirrors.aliyun.com|g' /etc/apt/sources.list.d/debian.sources; \
        sed -i 's|security.debian.org|mirrors.aliyun.com|g' /etc/apt/sources.list.d/debian.sources; \
    fi; \
    apt-get clean; \
    apt-get update -y; \
    apt-get upgrade -y

# 复制时区配置
ENV TZ=Asia/Shanghai
# RUN ln -snf /usr/share/zoneinfo/$TZ /etc/localtime && echo $TZ > /etc/timezone

RUN apt-get install -y \
    libzip-dev \
    zlib1g-dev \
    libpng-dev \
    libjpeg-dev \
    libjpeg62-turbo-dev \
    libfreetype6-dev \
    jpegoptim optipng pngquant \
    libonig-dev \
    libssl-dev \
    libmcrypt-dev \
    procps

RUN docker-php-ext-configure exif --enable-exif

RUN docker-php-ext-configure gd --enable-gd --with-jpeg=/usr/lib --with-freetype=/usr/include/freetype2 
RUN docker-php-ext-install -j$(nproc) gd pdo_mysql zip opcache exif

RUN docker-php-ext-configure mbstring --enable-mbstring
RUN docker-php-ext-install mbstring 

RUN docker-php-ext-configure bcmath --enable-bcmath
RUN docker-php-ext-install bcmath

# RUN pecl install mongodb-1.7.4 \
#     && docker-php-ext-enable mongodb

RUN pecl install redis
RUN apt-get install -y libicu-dev && docker-php-ext-enable redis

RUN docker-php-ext-install intl

RUN curl -sS https://getcomposer.org/installer | php  && mv composer.phar /usr/local/bin/composer
RUN composer config -g repo.packagist composer https://mirrors.aliyun.com/composer/

RUN apt install -y unzip

WORKDIR /www

