# Use the official PHP image as the base image
FROM php:7.4-apache

# Install MySQLi extension
RUN docker-php-ext-install mysqli

# Copy the source code to the /var/www/html directory in the container
COPY src/ /var/www/html/

# Expose port 80 to the host
EXPOSE 80

