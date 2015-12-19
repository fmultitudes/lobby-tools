<?php

/**
 * Frontend Controllers
 */
get('/', 'FrontendController@index')->name('home');

get('/temas/api/rechazadas/{q}', 'Temas\TemasController@rechazadas')->name('temas.rechazadas');
get('/temas/api/realizadas/{q}', 'Temas\TemasController@realizadas')->name('temas.realizadas');
get('/temas', 'Temas\TemasController@index')->name('temas');

get('macros', 'FrontendController@macros');

/**
 * These frontend controllers require the user to be logged in
 */
$router->group(['middleware' => 'auth'], function ()
{
	get('dashboard', 'DashboardController@index')->name('frontend.dashboard');
	get('profile/edit', 'ProfileController@edit')->name('frontend.profile.edit');
	patch('profile/update', 'ProfileController@update')->name('frontend.profile.update');
});