FROM php:7.3-fpm-alpine

# 参考 https://wiki.alpinelinux.org/wiki/Setting_the_timezone
# 为 alpine 系统中设置时区
RUN apk add tzdata \
    && cp /usr/share/zoneinfo/Asia/Shanghai /etc/localtime \
    && echo "Asia/Shanghai" >  /etc/timezone \
    && apk del tzdata

RUN sed -i 's/dl-cdn.alpinelinux.org/mirrors.aliyun.com/g' /etc/apk/repositories \
    && docker-php-ext-install pdo_mysql \
    && apk add ${PHPIZE_DEPS} \
    && pecl install redis-4.0.1 \
    && docker-php-ext-enable redis \
    && apk del ${PHPIZE_DEPS}

