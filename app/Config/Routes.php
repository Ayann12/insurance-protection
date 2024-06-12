<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Login::index');
$routes->post('login', 'Login::login_action');

$routes->get('logout', 'Login::logout');


$routes->get('agent/home', 'Agent\home::index', ['filter' => 'AgentFilter']);
$routes->get('marketing/home', 'Marketing\home::index', ['filter' => 'MarketingFilter']);
