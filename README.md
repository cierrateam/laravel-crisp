# Laravel-Crisp
A package for Wrapping the Crisp-Api into a useable Laravel-Package. Enjoy!

## Installation
1. Require the package:
    ```
    composer require cierrateam\laravel-crisp
    ```
2. Get a cup of tea
3. Add the ServiceProvider into the `config/app.php`
    ```
      'providers' => [
        // ...
        Cierrateam\LaravelCrisp\LaravelCrispServiceProvider::class,
        // ...
      ],
    ```
4. OPTIONAL: Add the alias in the same file:
    ```
     'aliases' => [
        // ...
          'LaravelCrisp' => Cierrateam\LaravelCrisp\LaravelCrisp::class,
        // ...
      ],
    ```
    
## Usage
For the usage see the Crisp-PHP-Api Package:
[PHP-Crisp-Api](https://github.com/crisp-im/php-crisp-api)
# Attention: 
The Docs are not the best.. So I'll spend some time to refactor it, if the Package is used sometimes by others!
