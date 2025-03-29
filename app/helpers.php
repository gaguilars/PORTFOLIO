<?php

function ActivarMenu($routeName)
{
    return request()->routeIs($routeName) ? 'active' : '';
}