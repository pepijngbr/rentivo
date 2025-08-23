start:
	@docker compose up -d #-d, runs in background

stop:
	@docker compose stop

setup:
	@composer install
	@php artisan migrate:fresh --seed

run:
	@php artisan serve