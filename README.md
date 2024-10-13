# Hero

A `powerful` and `intuitive` admin panel for managing your application with ease and efficiency.

## Install via composer

Run the following command to pull in the latest version:

```bash
composer require jobmetric/hero
```

### Publish the config
Copy the `config` file from `vendor/jobmetric/hero/config/config.php` to `config` folder of your Laravel application and rename it to `hero.php`

Run the following command to publish the package config file:

```bash
php artisan vendor:publish --provider="JobMetric\Hero\HeroServiceProvider" --tag="hero-config"
```

You should now have a `config/hero.php` file that allows you to configure the basics of this package.

## Documentation

coming soon...
