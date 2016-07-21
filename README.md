# Apolune
Apolune is the codename assigned to the version of _pandaac_ that utilises [Laravel 5.2](http://laravel.com/docs/5.2/).

## Please note
Due to lack of motivation, I'm looking for one, or possibly more, people to take over the project. More information can be found here; [https://otland.net/threads/pandaac-finding-a-possible-suitor.244753/](https://otland.net/threads/pandaac-finding-a-possible-suitor.244753/)

## Prerequisites
* [Laravel 5.2 Requirements](https://laravel.com/docs/5.2/installation#server-requirements)
* [Composer](https://getcomposer.org/)
* [The Forgotten Server 1.1](https://github.com/otland/forgottenserver/tree/1.1)

## Quick Notes

##### Demo Site
[https://demo.pandaac.io](https://demo.pandaac.io)

##### Server Owners
* Apolune is currently only being tested with [The Forgotten Server 1.1](https://github.com/otland/forgottenserver/tree/1.1).
  * Other server packages (e.g. Avesta, TFS 0.3) are planned for future releases.
* ~~As a temporary solution, we use the `dummydata.json` file for anything server related.~~
  * The `dummydata.json` file is no longer in effect. It has instead been split up into several separate files for easier management. They may be found within the `storage` folder ([here](https://github.com/pandaac/pandaac/tree/apolune/storage/server)).

##### Developers
* If you would like to contribute to Apolune, please make sure all of your code is using the [PSR-2](https://github.com/php-fig/fig-standards/blob/master/accepted/PSR-2-coding-style-guide.md) coding standard.
* You may also contribute to our public [CDN](https://github.com/pandaac/cdn).

## Installation
Change `my/path/` to wherever you want to install Apolune & run the command in your terminal.

```bash
composer create-project pandaac/pandaac my/path/ dev-apolune
```

Once the installation process is complete, you'll want to edit the `.env` file to fit your needs. Run the following command in your terminal to migrate the necessary database tables. You'll need to have an active database set up with the [TFS 1.1 schema](https://github.com/otland/forgottenserver/blob/1.1/schema.sql) pre-installed.

```bash
php artisan migrate --seed
```
