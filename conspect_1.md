
- Установка через composer (см. док.)
- Установить и настроить Tailwind CSS (см. док.)

- создать симлинк storage в папке public
php artisan storage:link

- Создать модели + миграции + фабрики
php artisan make:model Post --migration --factory
php artisan make:model AdminUser --migration --factory
php artisan make:model Comment --migration --factory

- редактир. миграции (созд. поля таблиц)

- редактир. Database\Seeders (заполнение таблиц тестовыми данными)

- добавить методы связи таблиц (hasMany и др.) в модели

- запуск миграций + автогенерация тестовых данных
php artisan migrate --seed