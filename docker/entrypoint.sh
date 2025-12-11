#!/bin/bash

# Jalankan migrasi, bisa kamu sesuaikan
php artisan migrate --force || true

# Jalankan Octane
exec php artisan octane:start --server=frankenphp --host=0.0.0.0 --port=8000
