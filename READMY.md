### билдим проект
docker compose up --build

### генерим токен
php artisan key:generate

### выполняем миграции для бд
docker exec -it posts_mvp-app php artisan migrate

### пушим в бд мок данные
docker exec -it posts_mvp-app php artisan db:seed

### в папке app выполняем
cp .env.example .env

### подставляем нужные креды к базе данных
