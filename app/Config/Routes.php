<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->match(['get', 'post'], 'register', 'Auth::register');
$routes->match(['get', 'post'], 'login', 'Auth::login');
$routes->get('/dashboard', 'Home::dashboard');
$routes->get('/offline_registration', 'Home::offline_registration');
$routes->get('/add_registration', 'Home::add_registration');
$routes->get('/member_import', 'Home::member_import');
$routes->get('fetch-members', 'MemberController::fetchMembers');
$routes->post('add-new', 'MemberController::saveMember');
$routes->post('search-members', 'MemberController::searchMembers');
$routes->post('update-member', 'MemberController::updateMembers');

