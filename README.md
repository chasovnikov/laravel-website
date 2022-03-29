# website-laravel9
Учебный вебсайт на laravel 9 по урокам от "Просто о Laravel. CutCode"

### Настройка готового проекта
```bash
composer install    # установка composer-зависимости (см. composer.json)
npm install         # уст-ка npm-завис-ти (см. package.jsoon)
npm run dev         # запуск команды из package.json: scripts: dev
php artisan storage:link    # создать симлинк папки storage в папке public
php artisan migrate --seed  # запуск миграций + создание тестовых данных

# создать файл .env по примеру .env.example

php artisan key:generate    # записывает APP_KEY в файле .env
php artisan serve           # запуск встроенного сервера
```
проверить результат по url: http://localhost:8000


## Алгоритм разработки

### Установка и первоначальная настройка
- установка через composer (см. док.)
- установить и настроить Tailwind CSS (см. док.)

- запуск сервера
```bash
php artisan serve
```
- проверить http://127.0.0.1:8000/

- создать симлинк storage в папке public
```bash
php artisan storage:link
```


### Создание и заполнение таблиц и моделей
- создать модели + миграции + фабрики
```bash
php artisan make:model Post --migration --factory
php artisan make:model AdminUser --migration --factory
php artisan make:model Comment --migration --factory
```

- редактир. миграции (созд. поля таблиц)

- редактир. database/seeders/DatabaseSeeder.php (заполнение таблиц тестовыми данными)

- добавить методы связи таблиц (hasMany и др.) в модели

- запуск миграций + автогенерация тестовых данных
```bash
php artisan migrate --seed
```

### Маршрутизация

```bash
php artisan make:middleware GoogleRecaptcha
```
- в App\Http\Middleware ищем новый мидлвар и реализуем логику
- в src/app/Http/Kernel.php подключаем новый мидлвар и назначаем алиас
- в src/routes/web.php добавляем мидлвар "->middleware('...')"
- проверка по url, например: localhost:8000/?r=1

```bash
php artisan make:controller IndexController
```
- редактир. в src/routes/web.php роут под 'index'

### Шаблонизатор Blade

