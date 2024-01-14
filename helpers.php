<?php
use Illuminate\Support\Facades\Route;

function is_route_active($route_name)
{
    return Route::currentRouteName() == $route_name;
}
