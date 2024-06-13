#!/bin/bash

# Install dependencies
composer install

# Run database migrations
php artisan migrate

# Run database seeds
php artisan db:seed

# Run tests
php artisan test

# Start the Laravel development server
php artisan serve
