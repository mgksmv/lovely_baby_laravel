## Simple Notes Project

Для запуска выполняем всё по порядку:
<br><br>
```composer install``` - устанавливаем зависимости
<br><br>
Переименовываем файл ".env.example" на просто ".env" и заменяем данные БД на актуальные
<br><br>
```php artisan key:generate``` - генерируем APP_KEY
<br><br>
```php artisan migrate``` - делаем миграции в БД
<br><br>

Админка (https://github.com/z-song/laravel-admin):
<br><br>
```composer require encore/laravel-admin```
<br><br>
```php artisan vendor:publish --provider="Encore\Admin\AdminServiceProvider"```
<br><br>
```php artisan admin:install```
<br><br>

```php artisan serve``` - запускаем локальный сервер
