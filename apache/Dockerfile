FROM debian:12


#Instalar paquetes necesarios (apache php extensions php)
RUN apt update && apt install -y apache2 php libapache2-mod-php \
    curl \
    wget \
    git \
    zip \
    php-json php-xml php-zip php-gd php-mysql  php-intl \
    && rm -rf /var/lib/apt/lists/* /var/cache/apt/*

EXPOSE 80
EXPOSE 443

RUN a2enmod ssl
RUN a2enmod rewrite

WORKDIR /app

CMD ["apache2ctl", "-D", "FOREGROUND"]
