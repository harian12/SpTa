<?php

$router = $di->getRouter();
$router->clear();

$router->add('/','index::index');

//login
$router->add('/login','login::index');
$router->add('/register','login::register');

//diagnosa
$router->add('diagnosa','diagnosa::index');

// Define your routes here

$router->handle();
