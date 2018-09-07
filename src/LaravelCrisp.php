<?php
namespace Cierrateam\LaravelCrisp;

class LaravelCrisp extends \Crisp {

    public function __construct()
    {
        parent::__construct();
        $ident = config('laravel-crisp.auth_identifier');
        $key = config('laravel-crisp.auth_key');
        $this->authenticate($ident, $key);
    }

    public static function test()
    {
        return 'Hello World';
    }
}