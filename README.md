# Laravel custom commands

<h4>A laravel package to create and use custom commands for artisan laravel. This package was created to share and use custom commands if you have a lot of projects and dont want 
to generate a custom command to each off them</h4>

## Requirements

Laravel 8 and later

## Installation & Usage

### Composer

To install via [composer](http://getcomposer.org/):

```
composer require ystevo/laravel-custom-commands
```

## Setup

First of all, you have to add `LaravelCustomCommandsServiceProvider` in your `app/config/app.php` in `Providers` section

```php
LaravelCustomCommands::LaravelCustomCommandsServiceProvider::class
```

Then run the following artisan command

`php artisan vendor-publish --tag=custom-commands-config`

and

`php artisan vendor-publish --tag=custom-commands`


### Custom commands currently supported

Currently this package supports the following command:

`php artisan run`

This command run a development serve using custom port without using `--port` alias. This can be used when you work with a lot of laravel packages and don't want to remember anytime the port 
that you commonly use.

To use this command, just set a default port on `.env` file:

`CUSTOM_COMMANDS_DEFAULT_PORT=8660`


More commands can be added on the future. Feel free to contribute!!


