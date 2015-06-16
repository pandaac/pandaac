# Apolune
Apolune is the codename assigned to the version of _pandaac_ that utilises [Laravel 5.1](http://laravel.com/docs/5.1/). It is still in an **early** development stage, so if you're planning on using _pandaac_ for your server, please refer to the more complete & stable [master branch](https://github.com/pandaac/pandaac), which instead utilises [Laravel 4.2](http://laravel.com/docs/4.2/).

## Prerequisites
* [Laravel 5.1 Requirements](http://laravel.com/docs/5.1/installation#installation)
* [Composer](https://getcomposer.org/)
* [The Forgotten Server 1.1](https://github.com/otland/forgottenserver/tree/1.1)

## Quick Notes

##### Server Owners
* Apolune is currently only being tested with [The Forgotten Server 1.1](https://github.com/otland/forgottenserver/tree/1.1).
  * Other server packages (e.g. Avesta, TFS 0.3) are planned for future releases.

##### Developers
* If you would like to contribute to Apolune, please make sure all of your code is using the [PSR-2](https://github.com/php-fig/fig-standards/blob/master/accepted/PSR-2-coding-style-guide.md) coding standard.

## Installation
Change `my/path/` to wherever you want to install Apolune & run the command in your terminal.

```bash
composer create-project pandaac/pandaac my/path/ dev-apolune
```

Once the installation process is complete, you'll want to edit the `.env` to fit your needs. Run the following command in your terminal to migrate the necessary database tables. You'll need to have an active database set up with the [TFS 1.1 schema](https://github.com/otland/forgottenserver/blob/1.1/schema.sql) pre-installed.

```bash
php artisan migrate:pandaac
```
