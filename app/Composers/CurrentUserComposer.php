<?php

namespace PlatziPHP\Composers;

use Illuminate\View\View;

//use Illuminate\Contracts\Auth\Guard;

use Illuminate\Support\Facades\Auth;

class CurrentUserComposer
{
    protected $auth;

   /* public function __construct (Guard $guard)
    {
        $this->auth = $auth;
    }*/

    public function compose(View $view)
    {
        $view->with('currentUser', Auth::user());
    }
}