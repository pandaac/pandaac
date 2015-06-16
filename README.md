# Apolune
Apolune is the codename assigned to the version of _pandaac_ that utilises [Laravel 5.1](http://laravel.com/docs/5.1/). It is still in an **early** development stage, so if you're planning on using _pandaac_ for your server, please refer to the more complete & stable [master branch](https://github.com/pandaac/pandaac), which instead utilises [Laravel 4.2](http://laravel.com/docs/4.2/).

## Prerequisites
* [Laravel 5.1 Requirements](http://laravel.com/docs/5.1/installation#installation)
* [Composer](https://getcomposer.org/)
* [The Forgotten Server 1.1](https://github.com/otland/forgottenserver/tree/1.1)

## Short Note
As we're using [Laravel 5.1](http://laravel.com/docs/5.1/), we have also adopted the [PSR-2](https://github.com/php-fig/fig-standards/blob/master/accepted/PSR-2-coding-style-guide.md) coding style.

At the moment, this version of _pandaac_ is only being tested with [The Forgotten Server 1.1](https://github.com/otland/forgottenserver/tree/1.1). _**Future** releases will cover other servers such as Avesta & TFS 0.3 as well._

## Installation
Change `my/path/` to wherever you want to install Apolune & run the command in your terminal.

```bash
composer create-project pandaac/pandaac my/path/ dev-apolune
```

Once you've adjusted the database settings in your `.env` file, run the following command to migrate the necessary database changes.
```bash
php artisan migrate:pandaac
```
