install:
	docker compose up -d
	cp .env.example .env
	docker exec -t setup-laravel_php bash -c "composer install"
	docker exec -t setup-laravel_php bash -c "php artisan key:generate"
	docker exec -t setup-laravel_php bash -c "php artisan migrate --force"
