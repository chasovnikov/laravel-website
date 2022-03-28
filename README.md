# website-laravel9
Учебный вебсайт на laravel 9 по урокам от "Просто о Laravel. CutCode"

### Установка и первоначальная настройка
- установка через composer (см. док.)
- установить и настроить Tailwind CSS (см. док.)

- запуск сервера
php artisan serve
- проверить http://127.0.0.1:8000/

- создать симлинк storage в папке public
php artisan storage:link

### Создание и заполнение таблиц
- создать модели + миграции + фабрики
php artisan make:model Post --migration --factory
php artisan make:model AdminUser --migration --factory
php artisan make:model Comment --migration --factory

- редактир. миграции (созд. поля таблиц)

- редактир. database/seeders/DatabaseSeeder.php (заполнение таблиц тестовыми данными)

- добавить методы связи таблиц (hasMany и др.) в модели

- запуск миграций + автогенерация тестовых данных
php artisan migrate --seed