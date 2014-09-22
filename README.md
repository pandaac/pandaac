# pandaac
pandaac is currently in active development. Bugs, missing and/or in-progress features are to be expected. It has yet to reach a stable version. Use cautiously.

---

### Requirements
The following items are required to install & maintain a working copy of pandaac. It may be subject to change.
* [Composer](https://getcomposer.org/)
* PHP >= 5.4
  * MCrypt Extension
  * CURL Extension
  * GD Extension

---

### Installation
Initially, we want to find/create a folder for our project to sit in (e.g. `cd path/to/folder`, from here on forth, we will refer to your root folder as `pandaac/`). Once we're happy with a folder, we execute the following command to install pandaac along with all of its dependencies. Give it a couple of minutes.
```bash
composer create-project pandaac/pandaac . --stability=dev --prefer-dist
```
Once installed, we want to publish the pandaac specified configuration files, as modifying any file within the `vendor/` directory should be avoided at all costs. Any `composer update` will erase your custom modifications within the aforementioned directory.
To publish the configuration files, we turn to Artisan to do its magic.
```bash
cd pandaac/
php artisan config:publish pandaac/bamboo
````
Next, we want to publish the assets that belong to the default theme, and once again, we refer to Artisan.
```bash
cd pandaac/
php artisan asset:publish pandaac/theme-retro
```
We are now ready to dig in, and adjust the wide variety of configuration options that are available through `pandaac/app/config`.

---

### Documentation
pandaac is based upon the amazing PHP framework, [Laravel](http://laravel.com/). As time goes by, we will create our own documentation of sort, but as of right now, you'll have to refer to [Laravel's documentation](http://laravel.com/docs).

#### Picking schema
As of right now, pandaac only supports [TFS 1.0](https://github.com/otland/forgottenserver) and [Avesta](https://code.google.com/p/avesta74/) officially, any one is obviously free to develop their own distrobution package.

In order to switch between these distrobution packages, one would refer to the `pandaac/app/config/packages/pandaac/bamboo/app.php` configuration file and change the `distro` value accordingly. Once that is done, you will also need to migrate their database tables.

##### The Forgotten Server 1.0
```php
'distro' => 'pandaac\TFS10\TFS10ServiceProvider', // The Forgotten Server 1.0
```
```bash
cd pandaac/
php artisan migrate --package=pandaac/tfs10
```

##### Avesta
```php
'distro' => 'pandaac\Avesta\AvestaServiceProvider', // Avesta
```
```bash
cd pandaac/
php artisan migrate --package=pandaac/avesta
```

---

### Community Packages
Below is a compiled list of some of the available community-based packages for pandaac. These packages are not maintained and/or officially supported by pandaac. Please refer to their respective repositories for assistance.

| Package | Author | composer.json require |
| ------- | ------ | ------- |
| [Bootstrap Theme](https://github.com/cornex1/pandaac-bootstrap-theme) | [Cornex](https://github.com/cornex1) | `"cornex/pandaac-bootstrap-theme": "dev-master"` |
