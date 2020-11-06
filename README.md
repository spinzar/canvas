Code Generators for Laravel Applications and Packages
==============

**Canvas** replicates all of the `make` artisan commands available in your basic Laravel application. It allows everyone to use it: 

* outside of Laravel installation such as when building Laravel packages.
* with Laravel by allowing few customization to the stub resolved class and namespace.

[![Build Status](https://travis-ci.org/orchestral/canvas.svg?branch=6.x)](https://travis-ci.org/orchestral/canvas)
[![Latest Stable Version](https://poser.pugx.org/orchestra/canvas/v/stable)](https://packagist.org/packages/orchestra/canvas)
[![Total Downloads](https://poser.pugx.org/orchestra/canvas/downloads)](https://packagist.org/packages/orchestra/canvas)
[![Latest Unstable Version](https://poser.pugx.org/orchestra/canvas/v/unstable)](https://packagist.org/packages/orchestra/canvas)
[![License](https://poser.pugx.org/orchestra/canvas/license)](https://packagist.org/packages/orchestra/canvas)
[![Coverage Status](https://coveralls.io/repos/github/orchestral/canvas/badge.svg?branch=6.x)](https://coveralls.io/github/orchestral/canvas?branch=6.x)

## Installation

To install through composer, run the following command from terminal:

    composer require --dev "orchestra/canvas"

## Usages

As a Laravel developer, you should be familiar with the following commands:

| Command.            | Description
|:--------------------|:---------------------     
| `php artisan make:channel` | Create a new channel class
| `php artisan make:command` | Create a new Artisan command
| `php artisan make:controller` | Create a new controller class
| `php artisan make:event` | Create a new event class
| `php artisan make:exception` | Create a new custom exception class
| `php artisan make:factory` | Create a new model factory
| `php artisan make:job` | Create a new job class
| `php artisan make:listener` | Create a new event listener class
| `php artisan make:mail` | Create a new email class
| `php artisan make:middleware` | Create a new middleware class
| `php artisan make:migration` | Create a new migration file
| `php artisan make:model` | Create a new Eloquent model class
| `php artisan make:notification` | Create a new notification class
| `php artisan make:observer` | Create a new observer class
| `php artisan make:policy` | Create a new policy class
| `php artisan make:provider` | Create a new service provider class
| `php artisan make:request` | Create a new form request class
| `php artisan make:resource` | Create a new resource
| `php artisan make:rule` | Create a new validation rule
| `php artisan make:seeder` | Create a new seeder class
| `php artisan make:test` | Create a new test class

Which can be execute via:

    php artisan make:migration CreatePostsTable --create

With **Canvas**, you can run the equivalent command via:

    ./vendor/bin/canvas make:migration CreatePostsTable --create

### `canvas.yaml` Preset file

To get started you can first create `canvas.yaml` in the root directory of your Laravel project or package.

#### Laravel preset

You can run the following command to create the file:

    ./vendor/bin/canvas preset laravel

Which will output the following as `canvas.yaml`:

```yaml
preset: laravel

namespace: App

model:
  namespace: App
```

#### Package preset

You can run the following command to create the file:

    ./vendor/bin/canvas preset package

Which will output the following as `canvas.yaml`:

```yaml
preset: package

namespace: PackageName
user-auth-provider: App\User

paths:
  src: src
  resource: resources

factory:
  path: database/factories

migration:
  path: database/migrations
  prefix: ''

console:
  namespace: PackageName\Console

model:
  namespace: PackageName

provider:
  namespace: PackageName

testing:
  namespace: PackageName\Tests
```

> You need to change `PackageName` to the root namespace for your package.


Alternatively, you can set `--namespace` option to ensure the namespace is used in the file:

    ./vendor/bin/canvas preset package --namespace="Foo\Bar"

```yaml
preset: package

namespace: Foo\Bar
user-auth-provider: App\User

paths:
  src: src
  resource: resources

factory:
  path: database/factories

migration:
  path: database/migrations
  prefix: ''

console:
  namespace: Foo\Bar\Console

model:
  namespace: Foo\Bar
  
provider:
  namespace: Foo\Bar

testing:
  namespace: Foo\Bar\Tests
```

### Integration with Laravel

By default, you can always use `./vendor/bin/canvas` for Laravel and Packages environment. However, with the Package Discovery `Orchestra\Canvas\LaravelServiceProvider` will be installed automatically and override all default `make` command available via artisan so you can use it without changing anything.
