# Use official PHP CLI image (includes composer)
FROM php:8.3-cli

# Set working directory
WORKDIR /app

# Install system deps & PHP extensions
RUN apt-get update \
  && apt-get install -y git unzip libzip-dev \
  && docker-php-ext-install zip pdo_mysql

# Install Composer & project dependencies
COPY --from=composer:2 /usr/bin/composer /usr/bin/composer
COPY . /app
RUN composer install --no-dev --optimize-autoloader

# Install Node & build assets
RUN apt-get install -y nodejs npm
RUN npm install && npm run build

# Expose the port and launch Laravel’s dev server
ENV PORT=10000
EXPOSE 10000
CMD ["php", "artisan", "serve", "--host=0.0.0.0", "--port=10000"]
