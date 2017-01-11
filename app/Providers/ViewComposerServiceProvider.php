<?php
/**
 * Created by PhpStorm.
 * User: obarrera
 * Date: 10/01/17
 * Time: 5:54 PM
 */

namespace PlatziPHP\Providers;


use Illuminate\Support\ServiceProvider;
use Illuminate\View\Factory;
use PlatziPHP\Composers\CurrentUserComposer;
class ViewComposerServiceProvider extends ServiceProvider
{

    public function boot(Factory $factory)
    {
        $factory->composer('*', CurrentUserComposer::class);
    }
}