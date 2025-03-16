
FROM debian:12

#Instalar paquetes necesarios (apache php extensions php)
RUN apt update && apt install -y php8.2-fpm \
    curl \
    wget \
    git \
    zip \
    php-json php-xml php-zip php-gd php-mysql  php-intl \
    && rm -rf /var/lib/apt/lists/* /var/cache/apt/*

EXPOSE 80
EXPOSE 443


WORKDIR /app

CMD [ "tail", "-f", "/dev/null" ]
