FROM php:8.2-apache

# Enable required PHP extensions
RUN docker-php-ext-install mysqli pdo pdo_mysql

# Set working directory
WORKDIR /var/www/html

# Copy project files
COPY public/ /var/www/html/

# Expose port 80
EXPOSE 80
