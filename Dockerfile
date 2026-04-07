FROM php:8.2-apache

COPY . /var/www/html/

RUN docker-php-ext-install mysqli

# Fix permissions
RUN chown -R www-data:www-data /var/www/html
RUN chmod -R 755 /var/www/html

# Fix Apache access
RUN echo "<Directory /var/www/html>\n\
    AllowOverride All\n\
    Require all granted\n\
</Directory>" >> /etc/apache2/apache2.conf

EXPOSE 80
