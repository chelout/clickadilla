docker-compose up -d
docker-compose run --rm composer install --no-interaction --ansi --no-suggest
docker-compose run --rm php cp .env.example .env
docker-compose run --rm php php artisan key:generate
docker-compose run --rm php php artisan migrate:fresh --force
