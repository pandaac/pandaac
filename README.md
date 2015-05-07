# Apolune
Apolune is the codename assigned to the version of _pandaac_ that utilises [Laravel 5.x](http://laravel.com/docs/5.0/). It is still in an **early** development stage, so if you're planning on using _pandaac_ for your server, please refer to the more complete & stable [master branch](https://github.com/pandaac/pandaac), which instead utilises [Laravel 4.2](http://laravel.com/docs/4.2/).

## Prerequisites
* [Laravel 5.x Requirements](http://laravel.com/docs/5.0/installation#server-requirements)
* [Composer](https://getcomposer.org/)

## Installation
Change `my/path/` to wherever you want to install Apolune & run the command in your terminal.

```bash
composer create-project pandaac/pandaac my/path/ dev-apolune
```

## Theme
When you have installed a brand new theme, you'll want to run the following command from your Apolune directory (e.g. `my/path/`).

```bash
php artisan theme:publish
```
