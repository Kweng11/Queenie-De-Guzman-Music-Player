<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
   
 $routes->get('/main', 'MusicController::index');
 $routes->get('/searchsong', 'MusicController::searchsong');
 $routes->get('/addtoplaylist', 'MusicController::addtoplaylist');
 $routes->post('/addsong', 'MusicController::addsong');