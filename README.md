https://laravel.com/docs/9.x — документация Laravel
https://laravel.com/docs/9.x/sail — документация Sail

Делаем настройку composer если ранее никогда это не делали.

composer create-project laravel/laravel project-name

cd project-name

composer require laravel/sail --dev

php artisan sail:install --devcontainer (через запятую выбираем что нужно, базово 2,3,5,7)

Настраиваем енв и добавляем в него переменные, с портами в диапазоне 49152 по 65535:

APP_SERVICE=web
APP_PORT=50000 (порт по которому будет доступен проект локально localhost:50000)
FORWARD_DB_PORT=50001
FORWARD_REDIS_PORT=50002
FORWARD_MEILISEARCH_PORT=50003
FORWARD_MAILHOG_PORT=50004
FORWARD_MAILHOG_DASHBOARD_PORT=50005
VITE_PORT=50006

alias sail='[ -f sail ] && sh sail || sh vendor/bin/sail'

открываем docker-compose.yml меняем laravel.test на web

открываем .devcontainer/devcontainer.json и заменяем service: “project-name”

sail up -d

далее используем все команды laravel через sail и в дальнейшем так и запускаем через него
sail artisan key:generate
sail artisan storage:link
sail artisan migrate
sail artisan db:seed
