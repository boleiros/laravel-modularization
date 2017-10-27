# Gerador de módulos para o laravel

How to use:

```
php artisan bake:module [name]
```

Run name on plural and lower case, example:

```
php artisan bake:module Posts
```

Register provider in config/app.php, see command result. Example of command result:

```
Add this provider to config/app.php:
Modules\Posts\Providers\PostServiceProvider::class,
```

Creating Migrations:

```
php artisan make:migration create_posts_table --path=modules/Posts/Migrations
```

Inspirado e iniciado a partir do repo: https://github.com/erikfig/laravel