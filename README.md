# pandaac

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
composer create-project pandaac/pandaac . --stability=dev
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

#### Database connection configuration
Now you need to set your database connection details, you do it in `pandaac/app/config/database.php`.
To deeper understand how it works, you can visit [Laravel's documentation](http://laravel.com/docs/4.2/database) 

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

#### Optional features
##### reCAPTCHA
If you would like to enable [Google's reCAPTCHA](https://www.google.com/recaptcha/intro/index.html) for account creation, run the following command:
```bash
cd pandaac/
php artisan config:publish greggilbert/recaptcha
```
Once it's done, traverse over to `pandaac/app/config/packages/greggilbert/recaptcha/config.php` and adjust the settings according to your demands. The `public_key` and `private_key` are both required.

---

### Issues & Feature Requests
Is something not working as it should? or do you simply want to request a new feature? Use the [pandaac/pandaac issues](https://github.com/pandaac/pandaac/issues).
