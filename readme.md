# Elementary Laravel

Only the basics in the most simplest way possible. Everything you need to create a website.

[Read the whole series.](https://laravelista.com/series/elementary-laravel)

- [Installation](https://laravelista.com/series/elementary-laravel/part/1)
- [Routing](https://laravelista.com/series/elementary-laravel/part/2)
- [Views](https://laravelista.com/series/elementary-laravel/part/3)
- [Blade templates](https://laravelista.com/series/elementary-laravel/part/4)
- [Forms](https://laravelista.com/series/elementary-laravel/part/5)
- [Validation](https://laravelista.com/series/elementary-laravel/part/6)
- [Mail](https://laravelista.com/series/elementary-laravel/part/7)

## Installation

Clone repository to your drive and type in terminal there:

```bash
composer install
```

## Configuration

Copy file `.env.example` to `.env` file:

```bash
cp .env.example .env
```

and change the `APP_KEY` in `.env` using:

```bash
php artisan key:generate
```

## Running

From terminal type:

```bash
php artisan serve
```

You should get an address to open in your browser like http://localhost:8000.

**Have fun!**
