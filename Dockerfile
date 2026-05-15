FROM php:8.2-apache

# Enable rewrite if needed
RUN a2enmod rewrite

# Set Apache document root to your folder
ENV APACHE_DOCUMENT_ROOT /var/www/html/Docker_php

# Update Apache config to use the new root
RUN sed -ri -e 's!/var/www/html!${APACHE_DOCUMENT_ROOT}!g' \
    /etc/apache2/sites-available/*.conf \
    /etc/apache2/apache2.conf \
    /etc/apache2/conf-available/*.conf

# Copy project into container
COPY . /var/www/html/Docker_php

# Fix permissions
RUN chown -R www-data:www-data /var/www/html/Docker_php

EXPOSE 80